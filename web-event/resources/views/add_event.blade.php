<x-app-layout>
    <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            Add New Event
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.store.event') }}" method="POST" enctype="multipart/form-data" class="was-validate">
                                @csrf
                                <div class="form-group">
                                    <label for="">Event Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-md-4 col-form-label">Event Category</label>
                                    <div class="col-md-6">
                                        <select name="category" id="province" class="form-control" required>
                                            <option value="">Select Event Category</option>
                                            @foreach ($eventCategory as $item => $category)
                                                <option value="{{ $category }}">{{ $category }}</option>
                                            @endforeach
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Organizer</label>
                                    <input type="text" name="event_organizer" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Location</label>
                                    <div class="col-md-6 mb-3">
                                        <select name="event_type" id="event_type" class="form-control" required>
                                            <option value="Offline">Offline</option>
                                            <option value="Online">Online</option>
                                        </select>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <label class="ml-2" for="">Input with Location when the Event is Offline, and Input with Link when the Event is Online</label>
                                    <input type="text" name="location" class="form-control ml-2" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="">Start Time</label>
                                    <input type="text" id="datepicker_start" name="start_time" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="">End Time</label>
                                    <input type="text" id="datepicker_end" name="end_time" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Image Upload</label>
                                    <input type="file" name="image" class="form-control mb-1" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Summary</label>
                                    <input type="text" name="event_summ" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Description</label>
                                    <input type="text" name="event_desc" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Capacity</label>
                                    <input type="text" name="capacity" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <input type="text" name="status" class="form-control" value="1" required hidden>

                                <input type="text" name="author" class="form-control" value="{{ Auth::user()->id}}" required hidden>

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
