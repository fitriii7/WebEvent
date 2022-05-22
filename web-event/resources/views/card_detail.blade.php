<x-app-layout>
  <div class="container" style="margin-top: 25px;">
    <div class="row">
      <div class="col-8">
        <img src="{{asset('uploads/event/'.$event->image) }}" class="img-fluid" alt="Event Image">
      </div>
      <div class="col-4">
        <div class="row">
          <div class="col-12 text-center" style="margin-top: 50px;">
            <h3 style="text-align:center">{{$event->title}}</h3>
          </div>
          <div class="col-12 text-center">
            <h6>Event by <b>{{$event->event_organizer}}</b></h6>
          </div>
          <div class="col-12" style="position: absolute; bottom: 50px;">
            <h6 class="text-bold">Ticket Available <span class="badge bg-primary">{{$event->capacity}}</span></h6>
            <h6 class="text-bold">Ticket Price <span class="badge bg-success">{{$event->price}}</span></h6>
          </div>
          <div class="col-12" style="float: right; position: absolute; bottom:0px;">
              <button class="btn btn-outline-dark btn-block">Buy Ticket</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 20px;">
      <div class="col-8">
        <div class="row">
          <div class="col-12 text-center">
            <h4>{{$event->title}}</h4>
          </div>
          <div class="col-12" style="margin-top: 20px; margin-bottom: 100px;">
            <h6 class="text-justify">{{$event->event_desc}}</h6>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="row">
          <div class="col-12" style="margin-top: 10px;">
            <label for="">Date & Time</label>
            <h6>{{$event->start_time}} Until {{$event->end_time}}</h6>
          </div>
          <div class="col-12" style="margin-top: 10px;">
            <label for="">Event Type</label>
            <h6><span class="badge bg-dark">{{$event->event_type}}</span></h6>
          
          </div>
          <div class="col-12" style="margin-top: 10px;">
            <label for="">Location</label>
            <h6>{{$event->location}}</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>