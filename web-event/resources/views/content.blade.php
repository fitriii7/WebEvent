<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            Content Slider
                            <a href="{{ route('dashboard.addSlider') }}" class="btn btn-outline-dark float-right">Add Slider</a>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slider as $item)
                                    <tr>
                                        <td>{{$item -> id}}</td>
                                        <td>{{$item -> heading}}</td>
                                        <td>
                                            <img src="{{ asset('uploads/slider/'.$item->image) }}" width="100px" alt="Slider Image">
                                        </td>
                                        <td>
                                            @if($item -> status == '1')
                                            Hidden
                                            @else 
                                            Visible
                                            @endif
                                        </td>
                                        <td>
                                        <a href="" class="btn btn-outline-warning float-center">Edit</a> 
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
