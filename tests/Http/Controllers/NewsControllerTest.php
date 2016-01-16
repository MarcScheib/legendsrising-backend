<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class NewsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testNewsIndex()
    {
        $user = factory(LegendsRising\Models\User::class)->create();
        $news = factory(LegendsRising\Models\News::class)->create([
            'user_id' => $user->id,
        ]);

        $this->get('/api/news')
            ->seeJson([
                'id' => $news->id,
            ]);
    }
}
