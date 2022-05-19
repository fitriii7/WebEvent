<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        @foreach ($event as $eventitem)
      <div class="card h-100">
        <img src="{{asset('uploads/event/'.$eventitem->image) }}" class="card-img-top" alt="Event Image">
        <div class="card-body">
          <h5 class="card-title">{{$eventitem->title}}</h5>
          <p class="card-text">{{$eventitem->event_summ}}</p>
          <small class="text-bold">Ticket Available <span class="badge bg-primary">{{$eventitem->capacity}}</span></small>
          <br>
          <small class="text-bold">Ticket Price <span class="badge bg-success">{{$eventitem->price}}</span></small>
          
        </div>
        <div class="card-footer">
            <div class="row">
                <button class="btn btn-outline-dark">Buy Ticket</button>
            </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>