<?php

namespace App\Repositories;

use App\Models\Subscribers;
use App\Models\Subscriptions;
use App\Interfaces\SubscriptionInterface;
use App\Repositories\PostRepository;

class SubscriptionRepository implements SubscriptionInterface
{

    public function create(array $attributes)
    {
        $subscriber = Subscribers::firstOrCreate([
            'email' => $attributes['email']
        ], $attributes);
        return  $subscriber->subscribe($attributes['website_id']);
    }

    public function getSubscriptions($website_id)
    {
        return Subscriptions::where('website_id', $website_id)->with('subscriber')->get();
    }
}
