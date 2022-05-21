<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            {{-- @foreach ($event as $eventitem)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="col">
                <div class="card h-100">
                  <a href="{{url('dashboard/eventDetail/'.$eventitem->id) }}">
                    <img src="{{asset('uploads/event/'.$eventitem->image) }}" class="card-img-top center" style="width: 415px; height:300px;" alt="Event Image">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">{{$eventitem->title}}</h5>
                    <p class="card-text">{{$eventitem->event_summ}}</p>
                    <div style="float: right;">
                      <small class="text-bold">Ticket Available <span class="badge bg-primary">{{$eventitem->capacity}}</span></small>
                    </div>
                    <br>
                    <div style="float: right; ">
                      <small class="text-bold">Ticket Price <span class="badge bg-success">{{$eventitem->price}}</span></small>
                    </div>
                  </div>
                  <div class="card-footer">
                      <div class="row">
                          <button class="btn btn-outline-dark">Buy Ticket</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach --}}
            it works
          </div>
    </div>
</x-app-layout>