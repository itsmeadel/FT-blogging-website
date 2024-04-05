<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('register') }}" class="p-6">
            @csrf
            <div class="mb-4">
                <label for="email" class="block">Email</label>
                <input id="email" type="email" name="email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block">Password</label>
                <input id="password" type="password" name="password" required>
            </div>
            <div class="mb-4">
                <label for="full_name" class="block">Full Name</label>
                <input id="full_name" type="text" name="full_name" required>
            </div>
            <div class="mb-4">
                <label for="date_of_birth" class="block">Date of Birth</label>
                <input id="date_of_birth" type="date" name="date_of_birth" required>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Sign Up</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
