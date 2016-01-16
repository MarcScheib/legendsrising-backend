<?php

namespace LegendsRising\Events\User;

use LegendsRising\Events\Event;
use LegendsRising\Models\User;

class UserRegistered extends Event
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}
