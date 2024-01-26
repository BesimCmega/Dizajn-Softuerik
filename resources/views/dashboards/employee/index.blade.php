<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-blue-900">
    <x-layouts.employee-navbar/>
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
          <a href = "{{ route('dashboards.employee.card1') }}">Learn More </a>
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
          <a href= "{{ route('dashboards.employee.card2') }}">Learn More </a>
        </button>
        </div>
      </div>

      <div class="flex-col items max-w-sm rounded overflow-hidden shadow-lg bg-blue-400">
        <div class="px-6 py-4 bg-blue-200 h-64">
          <div class="font-bold text-xl mb-2">Senior Data Scientist</div>
          <p class="text-gray-700 text-base">
            We are seeking a Senior Data Scientist to lead our data analytics efforts. As a Senior Data Scientist, you will be responsible for designing and implementing data-driven solutions, conducting statistical analysis, and providing valuable insights to inform business decisions.
          </p>
        </div>
        <div class="flex justify-center pt-4">
          <p class="font-bold"> Company name: LinkedIn</p>
        </div>
        <div class="flex justify-center pt-3 pb-4">
        <button class=" text-black text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-6 py-2 duration-150" type="button">
          <a href="{{ route('dashboards.employee.card3') }}">Learn More</a>
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
            <a href = "{{ route('dashboards.employee.card4') }}">Learn More </a>
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
            <a href= "{{ route('dashboards.employee.card5') }}">Learn More</a>
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
            <a href= "{{ route('dashboards.employee.card6') }}">Learn More</a>
          </button>
          </div>
        </div>
      </div>
        <x-flash-message />
</body>
</html>
