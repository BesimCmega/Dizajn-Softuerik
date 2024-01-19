<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  @vite('resources/css/app.css')
  <title>Admin Dashboard</title>
</head>
<body class="antialiased bg-gray-100 dark-mode:bg-gray-900">
    <div class=" w-full md:flex md:flex-row md:min-h-screen">
        <div class=" text-gray-700 bg-white md:w-64 dark:text-gray-200 dark:bg-gray-800" >
            <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline fixed top-5">Admin Dashboard</a>
                
            </div>
                <nav class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto flex-col fixed top-16">

        
                  <a class="pl-8 text-md transition duration-300 ease-in-out hover:text-blue-400" href="{{ route('dashboards.admin.users.users_index') }}">Users</a>

                   
                    <div class="flex flex-col justify-end mt-96 bottom-0 w-52">
          
                        <form class="flex flex-col items-start pb-7 pl-1 mt-28" method="POST" action="/logout">
                          @csrf
                          <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            <i class="fa-solid fa-door-closed"></i> Log out
                          </button>
                        </form>
                    </div>
                </nav>

        </div>
        
    </div>
</body>
</html>
