<?php

namespace LegendsRising\Listeners;

use LegendsRising\Events\User\UserRegistered;
use Log;

class UserEventListener
{
    public function subscribe($events)
    {
        $events->listen(
            'LegendsRising\Events\User\UserRegistered',
            'LegendsRising\Listeners\UserEventListener@onUserRegistered'
        );
    }

    public function onUserRegistered(UserRegistered $event)
    {
        // Todo: implement event handling
        Log::info("User Registered:" . $event->getUser()->username);
    }
}