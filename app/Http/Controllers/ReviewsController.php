<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\ClientQuestion;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Input; //Illuminate\Support\Facades\Input

class ReviewsController extends Controller
{
    /**
     * Initialize the review controller.
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
    public function index()
    {
        $this->theme->layout('home');

        return $this->theme->of('public::reviews', compact('page'))->render();
    }
}
