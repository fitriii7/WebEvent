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
                        <strong>Success!</strong> User Updated Successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            Edit User
                            <a href="{{ route('dashboard.user') }}" class="btn btn-outline-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('dashboard/user/update/'.$user->id) }}">
                                @csrf
                                @method('PUT')
                    
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                    
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus />
                                </div>
                    
                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />
                    
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
                                </div>
    
                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ml-4">
                                        {{ __('Save') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
