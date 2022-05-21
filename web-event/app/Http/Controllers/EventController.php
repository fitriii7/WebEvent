<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use carbon\Carbon;

class EventController extends Controller
{

    public function index(){
        $event = Event::all();
        return view('event', compact('event'));
    }

    // public function view($id){
    //     $event= Event::find($id);
    //     return view('card_detail',compact('event'));
    // }
    
    public function create() 
    {
        $eventCategory = EventCategory::pluck('category');
        return view('add_event', compact('eventCategory'));
    }

    public function store( Request $request){

        $startdate = $request->input('start_time');
        $format_startdate = date('Y-m-d', strtotime($startdate));
        $enddate = $request->input('end_time');
        $format_enddate = date('Y-m-d', strtotime($enddate));
        $event = new Event;
        $event->title = $request->input('title');
        $event->category = $request->input('category');
        $event->event_organizer = $request->input('event_organizer'); 
        $event->event_type = $request->input('event_type'); 
        $event->location = $request->input('location'); 
        $event->start_time = $format_startdate;
        $event->end_time = $format_enddate;
        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/event/', $filename);
            $event->image = $filename;
        }
        $event->event_summ = $request->input('event_summ');
        $event->event_desc = $request->input('event_desc');
        $event->capacity = $request->input('capacity');
        $event->price = $request->input('price');
        $event->status = $request->input('status');
       // dd($event)->all();
        $event->save();
        return redirect('dashboard/event')->with('status', 'Content for New Event Added Successfully');
    }

    public function eventDetail($id){
        dd($id);
        $event= Event::find($id);
        return view('card_detail',compact('event'));
    }

}
