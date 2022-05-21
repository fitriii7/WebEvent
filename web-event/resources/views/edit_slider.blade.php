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
                            Add New Content Slider
                            <a href="{{ route('dashboard.content') }}" class="btn btn-outline-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('dashboard/updateSlider/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="">Heading</label>
                                    <input type="text" name="heading" value="{{$slider->heading}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="description" value="{{$slider->description}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Link</label>
                                    <input type="text" name="link" value="{{$slider->link}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Link Name</label>
                                    <input type="text" name="link_name" value="{{$slider->link_name}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Slider Image Upload</label>
                                    <input type="file" name="image"  value class="form-control mb-1">
                                    <img src="{{ asset('uploads/slider/'.$slider->image) }}" width="100px" alt="Slider Image">    
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" {{$slider->status == '1' ? 'checked':''}}>
                                    <br>
                                    Check = Hidden
                                    <br>
                                    Uncheck = Visible
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
