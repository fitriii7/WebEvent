<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-3" id="mynavbar">
        <ul class="navbar-nav mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.create.event')}}" style="font-size: 13pt;"><b>Create New Event</b></a>
          </li> --}}
          @if (Auth::user()->hasRole('admin'))
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.content')}}" style="font-size: 13pt;"><b>Content</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.event')}}" style="font-size: 13pt;"><b>Event List</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.event')}}" style="font-size: 13pt;"><b>Payment</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.user')}}" style="font-size: 13pt;"><b>User List</b></a>
          </li>
          @endif
        </ul>
        <div class="navbar-nav ml-auto">
            <!-- Settings Dropdown -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div style="font-size: 13pt"><b>{{ Auth::user()->name }}<b/></div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">My Event</a>
                        <a class="dropdown-item" href="#">My Booking</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        
                    </x-slot>
                </x-dropdown>
        </div>
        <div class="navbar-nav ml-3">
            <a href="{{ route('dashboard.create.event') }}" class="btn btn-outline-dark"><i class="bi bi-plus"></i>New Event</a>
        </div>
      </div>
    </div>
  </nav>
{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->

                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex" style="">
                    <x-nav-link :href="route('dashboard.create.event')" :active="request()->routeIs('dashboard.create.event')">
                       <b>{{ __('Create New Event') }}</b> 
                    </x-nav-link>
                </div>
                
                @if (Auth::user()->hasRole('admin'))
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard.content')" :active="request()->routeIs('dashboard.content')">
                        {{ __('Content') }}
                    </x-nav-link>
                </div>
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard.event')" :active="request()->routeIs('dashboard.event')">
                        {{ __('Publish Event') }}
                    </x-nav-link>
                </div>
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard.payment')" :active="request()->routeIs('dashboard.payment')">
                        {{ __('Payment') }}
                    </x-nav-link>
                </div>
                @endif
                
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}
