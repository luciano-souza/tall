<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function verify(Subscriber $subscriber)
    {
        if (!$subscriber->hasVerifiedEmail()) {
            $subscriber->markEmailAsVerified();
        }

        return redirect('/?verified=1');
    }

    public function all()
    {
        // Carbon::setLocale('pt-BR');
        return view('subscribers.all');
    }
}
