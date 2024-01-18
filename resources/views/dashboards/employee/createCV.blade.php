<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create CV</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-900">
    <div class="flex justify-start p-2"><a class="px-8 py-2 text-blue-900 text-md bg-white hover:bg-blue-400 rounded-md" href="{{ route('dashboards.employee.cv') }}">← Back</a></div>

    <div class="flex flex-col items-center justify-center ">
            <form action="">
                <h1 class="text-center text-gray-300 text-3xl font-bold pb-4">Create your CV</h1>
                <div>
                    <label for="lookingjob" class="block pb-2 text-md font-medium text-gray-900 dark:text-white">What job your looking for?</label>
                    <input type="text" id="lookingjob" name="lookingjob" class="bg-gray-50 border mb-2 border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write the job here..." required>
                </div>
                
    <label for="experience" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Work Experience:</label>
    <textarea name="experience" id="experience" rows="4" class="block p-2.5 w-72 text-md text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your work experiences here..."></textarea>

    <label for="education" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Your Education:</label>
    <textarea name="education" id="education" rows="4" class="block p-2.5 w-72 text-md text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your education here..."></textarea>

    <div>
        <label for="phonenumber" class="block pb-2 text-md font-medium text-gray-900 dark:text-white">Your Phone Number:</label>
        <input type="number" id="phonenumber" name="phonenumber" class="bg-gray-50 border mb-2 border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your phone number here..." required>
    </div>

    
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Insert your CV document here:</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="document" id="document" type="file">

<div class="flex pt-4 justify-center">
    
    <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-28 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</div>
            </form>


    </div>


</body>
</html>