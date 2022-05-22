<x-app-layout>
    <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            Edit User
                            <a href="{{ route('dashboard.profile')}}" class="btn btn-outline-danger float-right">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('dashboard.profile.update') }}">
                                @csrf
                                @method('PUT')
                    
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                    
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ Auth::user()->name }}" required  />
                                </div>
                    
                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />
                    
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ Auth::user()->email }}" required />
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