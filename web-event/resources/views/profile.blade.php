<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    @if (session('updatestatus'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success! </strong> User Data Update Successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            Account Information
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form method="" action="">
                                @csrf
                    
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                    
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ Auth::user()->name }}" disabled />
                                </div>
                    
                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />
                    
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ Auth::user()->email }}" disabled />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a href="{{ route('dashboard.profile.edit') }}" class="btn btn-outline-warning float-right ml-4">Edit</a>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="btn btn-outline-dark float-right ml-4">Change Password</a>
                                    @endif
                                    
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
