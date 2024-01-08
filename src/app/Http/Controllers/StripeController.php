<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class StripeController extends Controller
{
    public function charge(Request $request){
    Stripe::setApiKey(config('stripe.stripe_secret'));

      $charge = Charge::create(array(
            'amount' => 1000,
            'currency' => 'jpy',
            'source'=> request()->stripeToken,
        ));
      return back();
    }
}
