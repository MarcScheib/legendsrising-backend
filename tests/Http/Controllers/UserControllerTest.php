<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function testUserRegister()
    {
        $this->post('/user')
            ->seeJson([
                'created' => true,
            ]);
    }
}