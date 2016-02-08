<?php

namespace LegendsRising\Http\Controllers;

use LegendsRising\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();

        return $faq;
    }
}
