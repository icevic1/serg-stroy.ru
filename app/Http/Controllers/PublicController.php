<?php

namespace App\Http\Controllers;

use Page;

class PublicController extends Controller
{
    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
    }

    /**
     * Display homepage.
     *
     * @return response
     */
    public function home()
    {
        $this->theme->layout('home');

        return $this->theme->of('public::home', compact('page'))->render();
    }

    /**
     * Display homepage.
     *
     * @return response
     */
    public function guest_question()
    {
//todo de facut insertul in DB
        return response()->json(['responseText' => 'Success!'], 200);
        $this->theme->layout('home');

        return 'xxxx';
    }
}
