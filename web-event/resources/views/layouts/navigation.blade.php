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
            <a class="nav-link" href="{{route('dashboard.payment')}}" style="font-size: 13pt;"><b>Payment</b></a>
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
                        <a class="dropdown-item" href="{{ route('dashboard.profile')}}">My Profile</a>
                        <a class="dropdown-item" href="{{ route('dashboard.my-event')}}">My Event</a>
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


