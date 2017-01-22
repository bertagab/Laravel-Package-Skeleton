<?php

namespace demo\General\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class demoGeneralController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // middleware for authentia
      $this->middleware('auth.demo');

      \App::singleton(
          \Illuminate\Contracts\Debug\ExceptionHandler::class,
          \demo\General\Exceptions\demoExceptionHandler::class
      );
    }

    //
    public function index()
    {
      return view('demo-general-dashboard::dashboard');
    }
}
