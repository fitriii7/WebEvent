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
                            Add New Content Slider
                            <a href="{{ route('dashboard.content') }}" class="btn btn-outline-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.store.content') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Heading</label>
                                    <input type="text" name="heading" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Link</label>
                                    <input type="text" name="link" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Link Name</label>
                                    <input type="text" name="link_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Slider Image Upload</label>
                                    <input type="file" name="image" class="form-control mb-1">
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status">
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


    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   ADD NEW CONTENT SLIDER
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>
