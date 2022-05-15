<header class="p-3 bg-dark text-white">
    <div class="container">
    <nav class="navbar">
      <a class="navbar-brand"> Jakarta Event</a>
      <div class="text-end">
              @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 sm:block">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" class="btn btn-outline-light me-">Log in</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif
        </div>
    </nav>
    </div>
  </header>