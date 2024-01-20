<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-900">
    <x-layouts.employer-navbar/>

    @if(auth()->user()->resume)
        <div class="flex flex-col items-center justify-center pt-32 text-2xl text-gray-400">
            <div class="flex font-bold pb-6">
                <h1 class="text-3xl">Your Resume</h1>
            </div>
            <div class="flex">
                <span class="block pb-2 font-medium dark:text-white">Your Company: </span> <span class="block pb-2 pl-2 font-medium dark:text-white">  {{auth()->user()->resume->company}}</span>
            </div>
            <div class="flex">
                <span class="block pb-2 font-medium dark:text-white">Your Education: </span> <span class="block pb-2 pl-2 font-medium dark:text-white">  {{auth()->user()->resume->education}}</span>
            </div> 
            <div class="flex">
                <span class="block pb-2 font-medium dark:text-white">Your Skills: </span> <span class="block pb-2 pl-2 font-medium dark:text-white">  {{auth()->user()->resume->skills}}</span>
            </div> 
    
            <div class="flex">
                <span class="block pb-2 font-medium dark:text-white">Your Work Experience: </span> <span class="block pb-2 pl-2 font-medium dark:text-white">  {{auth()->user()->resume->workExperience}}</span>
            </div> 
            <div class="flex">
                <span class="block pb-2 font-medium dark:text-white">Your Phone Number: </span> <span class="block pb-2 pl-2 font-medium dark:text-white">  {{auth()->user()->resume->phoneNumber}}</span>
            </div>
            <div class="flex">
                <span class="block pb-2 font-medium dark:text-white">Your Resume Document: </span> <span class="block pb-2 pl-2 font-medium dark:text-white">  {{auth()->user()->resume->document}}</span>
            </div>
            <button class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-28 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa-solid fa-pencil"></i>
               <a href="{{ route('dashboards.employer.edit', ['resume' => auth()->user()->resume]) }}">Edit</a>
            </button>
        </div>
    @else

    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-center text-gray-300 text-3xl font-bold pb-6">You need to create a resume first to apply for a job.</h1>
        <a href="{{ route('dashboards.employer.createResume') }}"><button class="text-blue-400 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-60 py-7 rounded outline-none focus:outline-none mb-1 ease-linear transition-all duration-150" type="button">
            <i class="fas fa-heart"></i> Create a resume
        </button></a>
    </div>
    @endif

</button>

</body>
</html>