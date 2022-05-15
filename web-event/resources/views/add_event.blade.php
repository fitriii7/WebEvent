<x-app-layout>
    <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">

                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success!</strong> Content for Slider Added Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            Add New Event
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.store.content') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Event Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Event Category</label>
                                    <input type="option" name="category" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input type="text" name="location" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Start Time</label>
                                    <input type="text" name="start_time" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">End Time</label>
                                    <input type="text" name="end_time" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Event Image Upload</label>
                                    <input type="file" name="image" class="form-control mb-1">
                                </div>

                                <div class="form-group">
                                    <label for="">Event Summary</label>
                                    <input type="text" name="event_summ" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Event Description</label>
                                    <input type="text" name="event_desc" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Capacity</label>
                                    <input type="text" name="capacity" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Event Description</label>
                                    <input type="text" name="price" class="form-control">
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
