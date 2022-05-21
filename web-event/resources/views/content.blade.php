<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
                            Content Slider
                            <a href="{{ route('dashboard.addSlider') }}" class="btn btn-outline-dark float-right"><i class="bi bi-plus"></i>New Slider</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
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
                                            <form action="{{ route('dashboard.destroySlider',$value->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
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
</x-app-layout>
