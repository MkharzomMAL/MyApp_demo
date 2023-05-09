<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia ;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return Inertia::render('Home');
    }
    public function teachers()
    {
        $users = User::orderby('id','DESC')->get();
        
        return view('teachers/index',compact('users'));

    }
    public function homeworks()
    {
        $homeworks = Homework::where('user_id' , Auth::user()->id )->orderby('id','DESC')->get();
        
        return view('homeworks/index',compact('homeworks'));

    }
    
}
