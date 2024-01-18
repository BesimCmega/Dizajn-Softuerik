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

    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-center text-gray-300 text-3xl font-bold pb-6">You need to create a CV first to apply for any of the jobs.</h1>
        <button class="text-blue-400 text-xl bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase px-60 py-7 rounded outline-none focus:outline-none mb-1 ease-linear transition-all duration-150" type="button">
            <i class="fas fa-heart"></i> Create a CV
        </button>
    </div>
    
    
</button>

</body>
</html>