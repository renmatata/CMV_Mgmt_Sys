<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMV</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">

    <!-- Styles -->

    <style>
        body{
            background-image: url("{{ asset('assets/images/about.jpg') }}");
        }
        #login-button {
            cursor: pointer;
            position: absolute;
            top: 50%;
            /* Center vertically */
            left: 50%;
            /* Center horizontally */
            transform: translate(-50%, -50%);
            /* Center the button relative to its container */
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(3, 3, 3, .8);
            overflow: hidden;
            opacity: 0.4;
            box-shadow: 10px 10px 30px #000;
        }

        #login-button img {
            width: 100%;
            /* Ensure the image takes up the entire circular button */
            height: 100%;
            /* Ensure the image takes up the entire circular button */
        }
    </style>

</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ route('login') }}" id="login-button">
                <img src="{{ asset('assets/images/admin.png') }}" alt="Login">
            </a>
            <!-- <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
            @else
            <a href="{{ route('login') }}" id="login-button">
                <img src="{{ asset('assets/images/admin.png') }}" alt="Login">
            </a> -->


            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</body>

</html>