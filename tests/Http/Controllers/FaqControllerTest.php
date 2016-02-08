<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class FaqControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testFaqIndex()
    {
        $faq = factory(LegendsRising\Models\Faq::class)->create();

        $this->get('/api/faq')
            ->seeJson([
                'id' => $faq->id,
                'question' => $faq->question,
                'answer' => $faq->answer
            ]);
    }
}
