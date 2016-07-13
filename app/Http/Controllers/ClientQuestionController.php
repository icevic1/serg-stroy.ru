<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\ClientQuestion;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Input; //Illuminate\Support\Facades\Input

class ClientQuestionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'phone'      => 'required|numeric',
            'question' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if ($validator->fails()) {
//            $messages = $validator->messages();
//            dd($messages, $validator->errors());
            return response()->json($validator->errors(), 500);
//            return Redirect::to('/')->withErrors($validator)->withInput(Input::all());
        } else {
            // store
            $question = new ClientQuestion();
            $question->name       = Input::get('name');
            $question->phone      = Input::get('phone');
            $question->question   = Input::get('question');
            $question->ip_address   = Request::ip();
            $question->save();

            // redirect
//            Session::flash('message', 'Successfully created nerd!');
//            return Redirect::to('/');
            return response()->json(['responseText' => 'Ваш вопрос был успешно отправлен'], 201);
        }
    }
}
