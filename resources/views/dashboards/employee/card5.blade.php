<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card-3</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-900">
    <div class="flex justify-start p-2"><a class="px-8 py-2 text-blue-900 text-md bg-white hover:bg-blue-400 rounded-md" href="{{ route('dashboards.employee.index') }}">← Back</a></div>
    <div class="h-28"></div>
    <div class="flex justify-center">

    <div class="flex-col items max-w-3xl rounded overflow-hidden shadow-lg bg-blue-400">
        <div class="px-6 py-4 bg-blue-200 h-30">
          <div class="font-bold text-xl mb-2">Network Security Engineer</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui possimus neque suscipit quae quis quasi expedita. Reiciendis eveniet quasi, voluptates fugit omnis rerum deleniti exercitationem maiores sit ducimus asperiores repellendus?
        </p>
        </div>

        <div class="flex justify-center pt-4 px-3 bg-blue-200 pb-4">
            <span> <span class="font-bold">Experience Required:  </span>
           Minimum of 3 years of experience in design.
           Proficient in JavaScript, HTML, CSS, and UI and UX. </span>
        </div>

        <div class="flex justify-center pt-2 bg-blue-200 pb-2">
            <p class="font-bold">Company Logo: <img src="/images/Googl.png" class="h-20 w-20" alt=""></p>
          </div>

        <div class="flex justify-center pt-4">
          <p class="font-bold"> Company name: Google</p>
        </div>
        <div class="flex justify-center pt-3 pb-4">
        <button class="text-black text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-6 py-2 duration-150" type="button">
          Apply for the Job!
        </button>
        </div>
      </div>

    </div>
</body>
</html>
