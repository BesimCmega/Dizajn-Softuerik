@vite('resources/css/app.css')
<div>
    <div class="flex justify-center fixed">
        <x-side-dashboard/>
    </div>

    <div class="pt-4 pl-56 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
            <div class="flex justify-start p-2"><a class="px-4 py-2 text-white bg-blue-700 hover:bg-blue-500 rounded-md" href="{{ route('dashboards.admin.users.users_index') }}">← Back</a></div>
            <div class="space-y-8 divide-y divide-gray-200 w-1/3 mt-10">
            <form method="POST" action="{{ route('dashboards.admin.users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="sm:col-span-6">
                    <label for="firstname" class="block text-sm font-medium text-gray-700"> First Name:</label>
                    <div class="mt-1">
                      <input type="text" name="firstname" value="{{$user->firstname}}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('firstname') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                  </div>
                    
                  <div class="sm:col-span-6 mt-6">
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name:</label>
                    <div class="mt-1">
                      <input type="text" name="lastname" value="{{$user->lastname}}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('lastname') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                  </div>
                
                  <div class="sm:col-span-6 mt-6">
                    <label for="email" class="block text-sm font-medium text-gray-700"> Email:</label>
                    <div class="mt-1">
                      <input type="email" name="email" value="{{$user->email}}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('email') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                  </div>
                
                  <div class="sm:col-span-6 mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700"> Password:</label>
                    <div class="mt-1">
                      <input type="password" name="password"  class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('password') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                  </div>

                  <div class="sm:col-span-6 mt-6">
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
                    <div class="mt-1">
                      <input type="password" name="confirm-password" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('confirm-password') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                  </div>


                  <div class="sm:col-span-6 mt-6">
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Role:</label>
                    <div class="relative mt-1">
                        <select name="roleId" id="roleId" class="block w-full pl-3 pr-10 py-2.5 text-md bg-transparent border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 dark:border-gray-600 dark:focus:border-blue-500 dark:text-black peer" required>
                            <option value="" disabled>Select a Role position</option>
                            <option class="text-gray-900" value="2" {{ $user->roleId == '2' ? 'selected' : '' }}>Employee</option>
                            <option class="text-gray-900" value="3" {{ $user->roleId == '3' ? 'selected' : '' }}>Employer</option>
                            <!-- Add more options as needed -->
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <!-- Your SVG content here -->
                            </svg>
                        </div>
                    </div>
                </div>
                

                <div class="sm:col-span-6 mt-6">
                    <button type="submit" class="px-14 py-2 ml-28 text-white bg-green-500 hover:bg-green-700 rounded-md">Update User</button>
                  </div>
            </form>
                </div>
            </div>
        </div>
    </div>


</div>