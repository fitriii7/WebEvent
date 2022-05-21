<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
        @php $i = 1; @endphp
        @foreach ($slider as $slideritem)
         <div class="carousel-item {{ $i == '1' ? 'active':''}}">
            @php $i++ @endphp
            <img src="{{asset('uploads/slider/'.$slideritem->image) }}"  style="height:680px; width:1920px;" class="" alt="Slider Image">
            <div class="carousel-caption d-none d-md-block">
              <h3>{{$slideritem->heading}}</h3>
              <p><b>{{$slideritem->description}}</b></p>
              <a href="{{$slideritem->link}}">{{$slideritem->link_name}}</a>
            </div>
          </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>