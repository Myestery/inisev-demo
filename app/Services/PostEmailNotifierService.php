<?php

namespace App\Services;

use App\Repositories\PostRepository;
use App\Repositories\SubscriptionRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PostEmailNotifierService
{
    protected SubscriptionRepository $subscriptionRepository;
    protected PostRepository $postRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository, PostRepository $postRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
        $this->postRepository = $postRepository;
    }


    public function broadcast($post_id)
    {
        $post = $this->postRepository->getById($post_id);
        $subscriptions = $this->subscriptionRepository->getSubscriptions($post->website_id);
        foreach ($subscriptions as $subscription) {
            // Mail::to($subscription->subscriber->email)->send(new \App\Mail\PostPublished($post, $post->website));
            Log::info("Sending email to {$subscription->subscriber->email}");
            Log::info("Website: {$post->website}");
            Log::info("Post: {$post}");
        }
    }
}
