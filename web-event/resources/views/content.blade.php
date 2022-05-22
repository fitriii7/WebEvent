<x-app-layout>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    @if (session('statusadd'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Success! </strong>New Content Slider Added Successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session('statusupdate'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Success! </strong>Content Slider Data Update Successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session('statusdelete'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Success! </strong>Content Slider Data has been Deleted!.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            Content Slider
                            <a href="{{ route('dashboard.addSlider') }}" class="btn btn-outline-dark float-right"><i class="bi bi-plus"></i>New Slider</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div  style="overflow-x:auto;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Heading</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    
                                        @php
                                        $no =1;
                                        @endphp
    
                                        @foreach ($slider as $item => $value)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$value -> heading}}</td>
                                            <td>
                                                <img src="{{ asset('uploads/slider/'.$value->image) }}" width="100px" alt="Slider Image">
                                            </td>
                                            <td>
                                                @if($value -> status == '1')
                                                Hidden
                                                @else 
                                                Visible
                                                @endif
                                            </td>
                                            <td>
                                            <a href=" {{ url('dashboard/editSlider/'.$value->id) }}" class="btn btn-outline-warning float-center">Edit</a> 
                                            </td>
                                            <td>
                                                {{-- <a href="{{ url('dashboard/content/'.$value->id) }}" class="btn btn-outline-danger float-center">Delete</a>  --}}
                                                <form action="{{ url('dashboard/content/destroy/'.$value->id) }}" method="POST">
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
