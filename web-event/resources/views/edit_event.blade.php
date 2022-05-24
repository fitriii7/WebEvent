<x-app-layout>
    <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            Edit Event
                            <a href="{{ route('dashboard.event') }}" class="btn btn-outline-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.event.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="was-validate">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="">Event Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$event->title}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-md-4 col-form-label">Event Category</label>
                                    <div class="col-md-6">
                                        <select name="category" id="province" class="form-control" required>
                                            @foreach ($eventCategory as $category)
                                                <option value="{{ $category }}" {{$category == $event->category ? 'selected' :''}}>{{ $category }}</option>
                                            @endforeach
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Organizer</label>
                                    <input type="text" name="event_organizer" value="{{$event->event_organizer}}" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Location</label>
                                    <div class="col-md-6 mb-3">
                                        <select name="event_type" id="event_type" value="{{$event->event_type}}" class="form-control" required>
                                            <option value="Offline">Offline</option>
                                            <option value="Online">Online</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <label class="ml-2" for="">Input with Location when the Event is Offline, and Input with Link when the Event is Online</label>
                                    <input type="text" name="location" class="form-control ml-2" value="{{$event->location}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="">Start Time</label>
                                    <input type="text" id="datepicker_start" name="start_time" value="{{$event->start_time}}" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="">End Time</label>
                                    <input type="text" id="datepicker_end" name="end_time" value="{{$event->end_time}}" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Image Upload</label>
                                    <input type="file" name="image" class="form-control mb-1">
                                    <img src="{{asset('uploads/event/'.$event->image) }}" width="100px" alt="Slider Image"> 
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Summary</label>
                                    <input type="text" name="event_summ" class="form-control"value="{{$event->event_summ}}"  required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Description</label>
                                    <textarea type="text" name="event_desc" class="form-control" value="{{$event->event_desc}}" required>{{$event->event_desc}}</textarea>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Capacity</label>
                                    <input type="text" name="capacity" class="form-control" value="{{$event->capacity}}"  required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{$event->price}}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Published</label>
                                    <input type="checkbox" name="status" {{$event->status == '1' ? 'checked':''}}>
                                    <br>
                                    Check = Published
                                    <br>
                                    Uncheck = Unpublish
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-dark float-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
<script>
    $("#datepicker_start").datepicker();
    $("#datepicker_end").datepicker();
</script>
