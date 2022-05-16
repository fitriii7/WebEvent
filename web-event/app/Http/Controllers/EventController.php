<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() 
    {
        $eventCategory = EventCategory::pluck('category');
        return view('add_event', compact('eventCategory'));
    }

}
