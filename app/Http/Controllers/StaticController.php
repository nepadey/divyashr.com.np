<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Inquery;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('static.welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $inquery = Inquery::create([
        'name' =>$request->name,
        'email'=> $request->email,
        'subject'=> $request->subject,
        'message'=> $request->comments,
     ]);
    return view('static.thank_you', ['inquery'=>$inquery]);

    }

}
