<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class NewsControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function testNewsView()
    {
        $this->get('/news/1')
            ->seeJson([
                'created' => true,
            ]);
    }
}