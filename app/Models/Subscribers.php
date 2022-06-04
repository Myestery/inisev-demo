<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
    ];

    public function subscribe($website_id)
    {
        $subscription = Subscriptions::firstOrCreate([
            'subscriber_id' => $this->id,
            'website_id' => $website_id,
        ]);

        return $subscription;
    }
}
