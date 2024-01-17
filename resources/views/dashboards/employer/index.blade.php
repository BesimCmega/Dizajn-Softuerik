<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employer</title>
</head>
<body>  
    <h1>Employer</h1>

    @auth
        <div class="flex-col lg:flex lg:flex-2 lg:justify-end items-center">
        <li style="list-style-type: none" >
          <span class="text-4xl font-semibold text-white font-steelfish uppercase">
            Welcome {{auth()->user()->firstname}} !
          </span>
        </li>
        <li style="list-style-type: none">
          <a href="/manages/manage" class="text-4xl text-white hover:text-laravel font-steelfish"><i class="fa-solid fa-gear"></i> Manage Bookings</a>
        </li>
        <li style="list-style-type: none" >
          <form class="inline" method="POST" action="/logout">
            @csrf
            <button class="text-4xl text-white font-steelfish" type="submit">
              <i class="fa-solid fa-door-closed"></i> Logout
            </button>
          </form>
        </li>
        </div>
        @else
        <a href="/signIn" class="flex items-center text-4xl font-semibold leading-6 text-white font-steelfish hover:underline">
          <span class="flex" >Sign in | </span><i class="fa-regular text-2xl pt-1 fa-user"></i>
         
        </a>
        @endauth
</body>
</html>