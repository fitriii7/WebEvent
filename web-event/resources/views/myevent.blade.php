<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('statusadd'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success! </strong>New Event Added Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('statusupdate'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success! </strong>Event Data Update Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('statusdelete'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success! </strong>Event Data has been Deleted!.
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
                            <div style="overflow-x:auto;">
                                <table class="table table-striped">
                                    @php
                                    $no =1;
                                    @endphp
                                    
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
                                            <td>{{$no++}}</td>
                                            <td>{{$value -> title}}</td>
                                            <td>
                                                <img src="{{ asset('uploads/event/'.$value->image) }}" width="100px" alt="Slider Image">
                                            </td>
                                            <td>{{$value -> event_summ}}</td>
                                            <?php if ($value-> status == 1) { ?>
                                                <td>Published</td>
                                           <?php }else{ ?>
                                           <td>pending</td>
                                            <?php }?>
                                            <td>
                                                <a href=" {{ url('dashboard/event/detail/'.$value->id) }}" class="btn btn-outline-success float-center">Show</a> 
                                            </td>
                                            <td>
                                                <a href=" {{url('dashboard/my-event/edit/'.$value->id)}}" class="btn btn-outline-warning float-center">Edit</a> 
                                            </td>
                                            <td>
                                                <form action="{{url('dashboard/my-event/destroy/'.$value->id)}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method">
                                                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                                                </form>
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
    </div>
</x-app-layout>
