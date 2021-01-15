<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Alpine JS --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <nav class="bg-gray-800">
                      <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                        <div class="relative flex items-center justify-between h-16">
                          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                            <!-- Mobile menu button-->
                            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                              <span class="sr-only">Open main menu</span>
                              <!-- Icon when menu is closed. -->
                              <!--
                                Heroicon name: menu
                    
                                Menu open: "hidden", Menu closed: "block"
                              -->
                              <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                              </svg>
                              <!-- Icon when menu is open. -->
                              <!--
                                Heroicon name: x
                    
                                Menu open: "block", Menu closed: "hidden"
                              -->
                              <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                            </button>
                          </div>
                          <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                            <div class="flex-shrink-0 flex items-center">
                            </div>
                            <div class="hidden sm:block sm:ml-6">
                              <div class="flex space-x-4">
                              </div>
                            </div>
                          </div>
                          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            @guest
                              @if (Route::has('login'))
                                <a  href="/login" 
                                    class="text-gray-300 hover:bg-gray-700 
                                            hover:text-white px-3 py-2 rounded-md text-sm font-medium">        
                                  Login
                                </a>
                              @endif
                              
                              @if (Route::has('register'))
                                <a  href="/register" 
                                    class="text-gray-300 hover:bg-gray-700 
                                            hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                  Register
                                </a>
                              @endif
                              @else
                                <a id="navbarDropdown" class="text-gray-300 hover:bg-gray-700 
                                        hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="/user/{{Auth::user()->id}}" 
                                        role="button" data-toggle="dropdown" 
                                        aria-haspopup="true" 
                                        aria-expanded="false" v-pre>
                                  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </a>

                                <a class="text-gray-300 hover:bg-gray-700 
                                          hover:text-white px-3 py-2 rounded-md 
                                          text-sm font-medium" 
                                          href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest
                          </div>
                        </div>
                      </div>
                    
                      <!--
                        Mobile menu, toggle classes based on menu state.
                    
                        Menu open: "block", Menu closed: "hidden"
                      -->
                      {{-- <div class="hidden sm:hidden">
                        <div class="px-2 pt-2 pb-3 space-y-1">
                          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                          <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
                          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
                          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
                          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
                        </div>
                      </div> --}}
                    </nav>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
