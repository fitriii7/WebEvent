<header class="navbar-light bg-light">
    <div class="container-fluid">
    <nav class="navbar">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
        </a>
      <div class="text-end">
              @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 sm:block">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" class="btn btn-outline-dark">Log in</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif
        </div>
    </nav>
    </div>
  </header>