<?php

namespace App\Http\Controllers;
use Auth;
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
//dd(Auth::user()->address);
        $reviewItems = \App\Review::all()
            ->where('published', 1)
            ->where('on_home', 1)
            ->where('is_video', 0);
        $reviewVideoItems = \App\Review::all()
            ->where('published', 1)
            ->where('on_home', 1)
            ->where('is_video', 1);
//dd(compact('reviewItems','reviewVideoItems'));
        return $this->theme->of('public::home', compact('reviewItems','reviewVideoItems'))->render();
    }
}
