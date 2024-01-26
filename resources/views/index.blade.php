<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-blue-900">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="../images/bitmap.png" style="width: 50px" alt="Flowbite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Merr Pune</span>
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-md text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
              </li>

              <li>
                <a href="sign-in" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Sign In</a>
              </li>

              <li>
                <a href="sign-up" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Sign Up</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <br>

    <div class="flex-col lg:flex lg:flex-2 lg:justify-end items-center">
      <li style="list-style-type: none">
        <a href="#" class="text-3xl text-white hover:text-laravel font-steelfish font-bold"><i class="fa-solid fa-gear"></i>Jobs to Apply</a>
      </li>
    </div>

    <div class="flex justify-around pt-16">

    <div class="flex-col items max-w-sm rounded overflow-hidden shadow-lg bg-blue-400">
      <div class="px-6 py-4 bg-blue-200 h-64">
        <div class="font-bold text-xl mb-2">Software Engineer - Full Stack Developer</div>
        <p class="text-gray-700 text-base">
          We are seeking a talented Full Stack Developer to join our dynamic team. As a Software Engineer, you will be responsible for developing and maintaining web applications from end to end. You should have a strong understanding of both front-end and back-end technologies.
        </p>
      </div>
      {{-- <div class="flex justify-center pt-4 px-3 ">
       <span> <span class="font-bold">Experience Required:  </span>
      Minimum of 3 years of experience in full-stack development.
      Proficient in JavaScript, HTML, CSS, and at least one modern front-end framework (e.g., React, Angular, Vue). </span>
      </div> --}}
      <div class="flex justify-center pt-4">
        <p class="font-bold"> Company name: Google</p>
      </div>
      <div class="flex justify-center pt-3 pb-4">
      <button class=" text-black text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-6 py-2 duration-150" type="button">
        <a href="sign-in">Learn More</a>
      </button>
      </div>
    </div>

    <div class="flex-col items max-w-sm rounded overflow-hidden shadow-lg bg-blue-400">
      <div class="px-6 py-4 bg-blue-200 h-64">
        <div class="font-bold text-xl mb-2">Customer Support Specialist</div>
        <p class="text-gray-700 text-base">
          We are looking for a skilled Digital Marketing Specialist to join our marketing team. As a Digital Marketing Specialist, you will be responsible for developing and executing digital marketing strategies to increase brand awareness and drive customer engagement.
        </p>
      </div>
      <div class="flex justify-center pt-4">
        <p class="font-bold"> Company name: Twitter</p>
      </div>
      <div class="flex justify-center pt-3 pb-4">
      <button class="text-black text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-6 py-2 duration-150" type="button">
        <a href="sign-in">Learn More</a>
      </button>
      </div>
    </div>

    <div class="flex-col items max-w-sm rounded overflow-hidden shadow-lg bg-blue-400">
      <div class="px-6 py-4 bg-blue-200 h-64">
        <div class="font-bold text-xl mb-2">Customer Support Specialist</div>
        <p class="text-gray-700 text-base">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus tempora ab fugit ex ullam, magni illum laboriosam temporibus non minus explicabo maiores consequatur animi, quas hic a dolor provident rem.
        </p>
      </div>
      <div class="flex justify-center pt-4">
        <p class="font-bold"> Company name: LinkedIn</p>
      </div>
      <div class="flex justify-center pt-3 pb-4">
      <button class="text-black text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-6 py-2 duration-150" type="button">
        <a href="sign-in">Learn More</a>
      </button>
      </div>
    </div>



    </div>

    <div class="flex justify-around pt-32">

      <div class="flex-col items max-w-sm rounded overflow-hidden shadow-lg bg-blue-400">
        <div class="px-6 py-4 bg-blue-200 h-64">
          <div class="font-bold text-xl mb-2">UX/UI Designer</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui possimus neque suscipit quae quis quasi expedita. Reiciendis eveniet quasi, voluptates fugit omnis rerum deleniti exercitationem maiores sit ducimus asperiores repellendus?
        </p>
        </div>
        {{-- <div class="flex justify-center pt-4 px-3 ">
         <span> <span class="font-bold">Experience Required:  </span>
        Minimum of 3 years of experience in full-stack development.
        Proficient in JavaScript, HTML, CSS, and at least one modern front-end framework (e.g., React, Angular, Vue). </span>
        </div> --}}
        <div class="flex justify-center pt-4">
          <p class="font-bold"> Company name: Google</p>
        </div>
        <div class="flex justify-center pt-3 pb-4">
        <button class=" text-black text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-6 py-2 duration-150" type="button">
          <a href="sign-in">Learn More</a>
        </button>
        </div>
      </div>

      <div class="flex-col items max-w-sm rounded overflow-hidden shadow-lg bg-blue-400">
        <div class="px-6 py-4 bg-blue-200 h-64">
          <div class="font-bold text-xl mb-2">Network Security Engineer</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui possimus neque suscipit quae quis quasi expedita. Reiciendis eveniet quasi, voluptates fugit omnis rerum deleniti exercitationem maiores sit ducimus asperiores repellendus?
        </p>
        </div>
        <div class="flex justify-center pt-4">
          <p class="font-bold"> Company name: Twitter</p>
        </div>
        <div class="flex justify-center pt-3 pb-4">
        <button class="text-black text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-6 py-2 duration-150" type="button">
          <a href="sign-in">Learn More</a>
        </button>
        </div>
      </div>

      <div class="flex-col items max-w-sm rounded overflow-hidden shadow-lg bg-blue-400">
        <div class="px-6 py-4 bg-blue-200 h-64">
          <div class="font-bold text-xl mb-2">Customer Support Specialist</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui possimus neque suscipit quae quis quasi expedita. Reiciendis eveniet quasi, voluptates fugit omnis rerum deleniti exercitationem maiores sit ducimus asperiores repellendus?
          </p>
        </div>
        <div class="flex justify-center pt-4">
          <p class="font-bold"> Company name: Twitter</p>
        </div>
        <div class="flex justify-center pt-3 pb-4">
        <button class="text-black text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-6 py-2 duration-150" type="button">
          <a href="sign-in">Learn More</a>
        </button>
        </div>
      </div>



      </div>
      <x-flash-message />
</body>
</html>
