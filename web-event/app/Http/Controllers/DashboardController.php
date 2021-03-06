<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Event;
use Illuminate\Http\Request;
use Auth;
use File;

class DashboardController extends Controller
{
    public function index()
    {
        $slider = Slider::where('status', '0')->get();
        $event = Event::where('status', '1')->get();
        return view('dashboard', compact('slider', 'event'));
    
    }

    public function content()
    {
        $slider = Slider::all();
        return view('content', compact('slider'));
    }

    public function storeContent(Request $request)
    {
        $slider = new Slider; 
        $slider->heading = $request->input('heading'); 
        $slider->description = $request->input('description');        
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/slider/', $filename);
            $slider->image = $filename;
        }
        $slider->status = $request->input('status') == true ? '1' : '0';
        $slider->save();
        return redirect('dashboard/content')->with('statusadd', 'Content for Slider Added Successfully');
    }

    public function addSlider()
    {
        return view('add_slider');
    }

    public function editSlider($id)
    {
        
        $slider = Slider::find($id);

        return view('edit_slider', compact('slider'));
    }

    public function updateSlider(Request $request, $id)
    {
        $slider = Slider::find($id); 

        $slider->heading = $request->input('heading'); 
        $slider->description = $request->input('description');        
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if ($request->hasfile('image'))
        {
            $destination = 'uploads/slider/'.$slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/slider/', $filename);
            $slider->image = $filename;
        }
        $slider->status = $request->input('status') == true ? '1' : '0';
        $slider->save();
        return redirect('dashboard/content')->with('statusupdate', 'Content for Slider Update Successfully');
    }

    public function destroy($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('statusdelete', 'Data has been Deleted!');
    }

    public function payment()
    {
        return view('payment');
    }

    public function userDetailEvent()
    {
        return view ('user_eventdetail');

    }
}
