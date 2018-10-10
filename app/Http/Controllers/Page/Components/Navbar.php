<?php

namespace App\Http\Controllers\Page\Components;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Navbar extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->user()->authorizeRoles(['root', 'admin', 'user']);
        return view('pages.components.navbar');
    }
}
