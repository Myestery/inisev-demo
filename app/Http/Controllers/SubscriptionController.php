<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscription;
use App\Repositories\SubscriptionRepository;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    protected $subscriptionRepository;
    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }

    public function create(CreateSubscription $request)
    {
        $subscription = $this->subscriptionRepository->create($request->all());
        return response()->json($subscription, 201);
    }
}
