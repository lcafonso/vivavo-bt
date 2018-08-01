<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Homepage
    public function home(){
      return view('home');
    }

    //Newspage
    public function grandmas(){
      return view('grandmas');
    }


    //Newspage
    public function news(){
      return view('news');
    }

    //Eventspage
    public function events(){
      return view('events');
    }

    //Eventspage
    public function project(){
      return view('project');
    }

    //Eventspage
    public function contacts(){
      return view('contacts');
    }

}
