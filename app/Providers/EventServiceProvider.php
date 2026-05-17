<?php

namespace App\Providers;

use App\Events\AdminVerificationEvent;
use App\Listeners\AdminVerificationListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        AdminVerificationEvent::class=>[
            AdminVerificationListener::class
        ]
    ];
}