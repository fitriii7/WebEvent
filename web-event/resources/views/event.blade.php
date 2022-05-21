<x-app-layout>
    <div class="container p-5 my-5 border">
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
                            Event List
                        <a href="{{ route('dashboard.create.event') }}" class="btn btn-outline-dark float-right">Add New Event</a>
                        </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($event as $item => $value)
                                    <tr>
                                    <td>{{$value -> id}}</td>
                                        <td>{{$value -> title}}</td>
                                        <td>
                                            <img src="{{ asset('uploads/event/'.$value->image) }}" width="100px" alt="Slider Image">
                                        </td>
                                        <td>{{$value -> event_summ}}</td>
                                        <td>{{$value -> status}}</td>
                                        <td>
                                            <a href=" {{ url('dashboard/event/detail/'.$value->id) }}" class="btn btn-outline-success float-center">Show</a> 
                                        </td>
                                        <td>
                                            <a href=" {{ url('dashboard/event/edit/'.$value->id) }}" class="btn btn-outline-warning float-center">Edit</a> 
                                        </td>
                                        <td>
                                            <a href=" {{ url('dashboard/event/edit/'.$value->id) }}" class="btn btn-outline-danger float-center">Delete</a> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
