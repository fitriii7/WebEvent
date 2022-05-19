<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Event;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
        public function index(){
                $slider = Slider::where('status', '0')->get();
                $event = Event::all();
                return view('dashboard', compact('slider', 'event'));        
        }
        
}
