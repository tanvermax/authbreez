<?php

namespace App\Listeners;

use App\Events\AdminVerificationEvent;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class AdminVerificationListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AdminVerificationEvent $event): void
    {
        //
       if ($event->admin instanceof MustVerifyEmail && !$event->admin->hasVerifiedEmail()) {
            $event->admin->sendEmailVerificationNotification();
        }
    }
}
