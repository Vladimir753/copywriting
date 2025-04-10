<?php

namespace App\Http\Controllers;

use App\Requests\StripeSubscriptionStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Webhook;

class SubscriptionController
{
    public function store(StripeSubscriptionStoreRequest $request)
    {
        $validated = $request->validated();

        Stripe::setApiKey(config('services.stripe.secret'));

        $planId = config("payments-boxes.config.{$validated['plan_id']}");

        $session = Session::create([
            'payment_method_types' => ['card'],
            'mode' => 'subscription',
            'line_items' => [[
                'price' => $planId,
                'quantity' => 1,
            ]],
            'metadata' => [
                'permission' => $validated['permission'],
                'user_id' => auth()->user()->id,
                'purchasable_id' => 1,
                'purchasable_type' => $validated['permission'],
            ],
            'success_url' => url()->previous(),
            'cancel_url' => route(Route::current()->getName()),
        ]);

        return response()->json(['id' => $session->id]);
    }
}
