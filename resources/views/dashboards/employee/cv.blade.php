<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV</title>
    
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-900">
    <x-layouts.employee-navbar/>

    @if(auth()->user()->cv)
    <div class="flex flex-col items-center justify-center pt-20">
        <h1 class="text-center text-gray-300 text-3xl font-bold pb-6">Your CV</h1>

        <div class="flex">
        <span class="block pb-2 text-xl font-medium text-gray-400 dark:text-gray-400">The job your looking for: </span> <span class="block pb-2 pl-2 text-xl font-medium text-gray-400 dark:text-gray-400">  {{auth()->user()->cv->lookingjob}}</span>
        </div>   

        <div class="flex">
            <span class="block pb-2 text-xl font-medium text-gray-400 dark:text-gray-400">Your Experience: </span> <span class="block pb-2 pl-2 text-xl font-medium text-gray-400 dark:text-gray-400">  {{auth()->user()->cv->experience}}</span>
        </div> 
        
        <div class="flex">
            <span class="block pb-2 text-xl font-medium text-gray-400 dark:text-gray-400">Your Education: </span> <span class="block pb-2 pl-2 text-xl font-medium text-gray-400 dark:text-gray-400">  {{auth()->user()->cv->education}}</span>
        </div> 

        <div class="flex">
            <span class="block pb-2 text-xl font-medium text-gray-400 dark:text-gray-400">Your Phone Number: </span> <span class="block pb-2 pl-2 text-xl font-medium text-gray-400 dark:text-gray-400">  {{auth()->user()->cv->phonenumber}}</span>
        </div> 

        <div class="flex">
            <span class="block pb-2 text-xl font-medium text-gray-400 dark:text-gray-400">Your CV Document: </span> <span class="block pb-2 pl-2 text-xl font-medium text-gray-400 dark:text-gray-400">  {{auth()->user()->cv->document}}</span>
        </div> 

        <div class="flex pt-4 justify-center">
            <a href="{{ route('dashboards.employee.editCV', auth()->user()->cv) }}">
            <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-28 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa-solid fa-pencil"></i>Edit CV</button>
            </a>
        </div>

    </div>
    @else

    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-center text-gray-300 text-3xl font-bold pb-6">You need to create a CV first to apply for a job.</h1>
        <a href="{{ route('dashboards.employee.createCV') }}"><button class="text-blue-400 text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-60 py-7 rounded outline-none focus:outline-none mb-1 ease-linear transition-all duration-150" type="button">
            <i class="fas fa-heart"></i> Create a CV
        </button></a>
    </div>
    @endif
    
    
</button>

</body>
</html>