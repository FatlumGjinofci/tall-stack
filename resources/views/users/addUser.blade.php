@extends('home')

@section('dashboard')
    {{-- Add user form --}}
    <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
        <form action="{{ route('store-user') }}" method="POST">
            @csrf
            <div class="space-y-6 sm:space-y-5">
              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  First name
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="first_name" id="first_name" required autocomplete="given-name" 
                    class="max-w-lg py-1 block w-full shadow-sm focus:ring-indigo-500 border focus:border-gray-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                  @error('first_name')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
      
              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="last_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Last name
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="last_name" id="last_name" required autocomplete="family-name" 
                            class="max-w-lg py-1 block w-full shadow-sm border focus:ring-indigo-500 focus:border-gray-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                  @error('last_name')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
      
              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Email address
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="email" name="email" type="email" required autocomplete="email" 
                            class="border py-1 block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md"
                          value="{{ old('email') }}">
              
                    @error('email')
                      <span class="text-red-500" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              
              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Password
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="password" name="password" type="password" required autocomplete="password" 
                            class="border py-1 block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md">
                  @error('password')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
      
              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Status
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <select id="status" name="status" required autocomplete="status" 
                            class="border py-1 max-w-lg block focus:ring-indigo-500 focus:border-gray-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                    <option>Staff</option>
                    <option>Admin</option>
                  </select>
                  @error('status')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
      
              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="phone_number" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Phone Number
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="number" name="phone_number" required id="phone_number" autocomplete="phone_number-address" 
                        class="border py-1 block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md">
                  @error('phone_number')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

            </div>
            <div class="pt-5">
                <div class="flex justify-end">
                  <a href="/home" class="bg-white py-2 px-4 border border-gray-300 rounded-md 
                                                shadow-sm text-sm font-medium text-gray-700 
                                                hover:bg-gray-50 focus:outline-none focus:ring-2 
                                                focus:ring-offset-2 focus:ring-gray-500">
                    Cancel
                    </a>
                  <button type="submit" 
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent 
                                    shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 
                                    hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Save
                  </button>
                </div>
            </div>
        </form>
    </div>
@endsection