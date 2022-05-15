<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {

        if(Auth::user()->hasRole('user')){
            return view('userdashboard');
        }elseif(Auth::user()->hasRole('admin')){
            return view('admindashboard');
        }
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
        return redirect()->back()->with('status', 'Content for Slider Added Successfully');
    }

    public function addSlider()
    {
        return view('add_slider');
    }

    public function payment()
    {
        return view('payment');
    }
}
