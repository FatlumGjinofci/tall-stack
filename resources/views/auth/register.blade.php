@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Register
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Or
          <a href="/login" class="font-medium text-gray-600 hover:text-gray-500">
            login
          </a>
        </p>
      </div>
      <form class="mt-8 space-y-6" 
            method="POST" action="{{ route('register') }}">
        @csrf
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="first_name" class="sr-only">First Name</label>
                <input id="first_name" name="first_name" type="text" autocomplete="first_name" required class="appearance-none rounded-none relative block w-full px-3 py-2 
                      border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-gray-500 focus:z-10 sm:text-sm" 
                      placeholder="First Name">
                
                @error('first_name')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="last_name" class="sr-only">Last Name</label>
                <input id="last_name" 
                        name="last_name" 
                        type="text" 
                        autocomplete="last_name" 
                        required 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border 
                          border-gray-300 placeholder-gray-500 text-gray-900  
                          focus:outline-none focus:ring-indigo-500 focus:border-gray-500 focus:z-10 sm:text-sm" 
                        placeholder="Last Name">

                @error('last_name')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="phone_number" class="sr-only">Phone Number</label>
                <input id="phone_number" 
                        name="phone_number" 
                        type="number" 
                        autocomplete="phone_number" 
                        required 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 
                          placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 
                          focus:border-gray-500 focus:z-10 sm:text-sm" 
                        placeholder="Phone Number">

                @error('phone_number')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input id="email" 
                        name="email" 
                        type="email" 
                        autocomplete="email" 
                        required 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 
                          placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 
                          focus:border-gray-500 focus:z-10 sm:text-sm" 
                placeholder="Email address">
            
            @error('email')
                <span class="text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" 
                        name="password" 
                        type="password" 
                        autocomplete="current-password" 
                        required 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 
                        placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500
                         focus:border-gray-500 focus:z-10 sm:text-sm" 
                placeholder="Password">

            @error('password')
                <span class="text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-gray-500 group-hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            Register
          </button>
        </div>
      </form>
    </div>
</div>
@endsection
