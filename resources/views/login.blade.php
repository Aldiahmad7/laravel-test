<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Login</title>
</head>
<body class="h-full bg-gray-50">

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mx-auto w-full max-w-md bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-2 text-center text-4xl font-bold tracking-tight text-gray-900">Sign in</h2>
        </div>
    
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-2 border-gray-200 focus:border-indigo-600 transition-colors duration-200">
                    </div>
                </div>
    
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-2 border-gray-200 focus:border-indigo-600 transition-colors duration-200">
                    </div>
                </div>
    
                <div class="flex justify-center">
                    <button type="submit" class="flex justify-center rounded-md bg-indigo-600 px-8 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 w-32">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
  
</body>
</html>