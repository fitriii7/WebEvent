<!DOCTYPE html>
@php
use App\Models\Slider;
use App\Models\Event;
use Illuminate\Http\Request;
  
                $slider = Slider::where('status', '0')->get();
                $event = Event::all();        
        
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Jakarta Eventt</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    @include ('include/header')
  </head>
    <body>
        @include ('include/slider')
        <br>
          <div class="container mt-5">
              <div class="row">
                  <div class="col-md-12 mb-5">
                      @include('include/card')
                  </div>
                </div>
          </div>
        @include ('include/footer')
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
