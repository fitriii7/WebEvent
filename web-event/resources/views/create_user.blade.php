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
                        <strong>Success!</strong> New User Added Successfully.
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
                            <form method="POST" action="{{ route('dashboard.user.store') }}">
                                @csrf
                    
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                    
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                </div>
                    
                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />
                    
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>

                                <!-- User Role -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('User Role')" />
                                    <select name="role_id" id="role_id" class="form-control" required>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />
                    
                                    <x-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>
                    
                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    
                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required />
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
