<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");   
        Log::info('singleSearchEstateRequest : ', $age);
             $message='hjhjhjh';
            Log::emergency([$message]);
            Log::alert([$message]);
            Log::critical([$message]);
            Log::error([$message]);
            Log::warning([$message]);
            Log::notice([$message]);
            Log::info([$message]);
            Log::debug([$message]);
        return view('home');
    }
}
