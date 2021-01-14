@extends('home')

@section('dashboard')
  @if (Auth::user()->status == 'Admin')
    <div class="px-2 py-2">
        <button class="border px-4 py-1 bg-gray-800 text-white font-semibold rounded-md shadow-md">
            <a href="/create-user">
                Add User
            </a>
        </button>
    </div>
  @endif
  <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    First Name
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Last Name
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Phone Number
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Status
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Email
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Delete</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                  @foreach ($users as $user)
                      <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                              {{ $user->first_name}}
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                              {{ $user->last_name}}
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                              {{ $user->phone_number}}
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                              {{ $user->status}}
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                              {{ $user->email}}
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                              <a href="/user/{{$user->id}}" class="text-gray-600 hover:text-gray-900">
                                Edit
                              </a>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('delete-user',$user->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="text-gray-600 hover:text-gray-900">
                                Delete
                              </button>
                            </form>
                        </td>
                      </tr>
                @endforeach
                <!-- More items... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>

@endsection