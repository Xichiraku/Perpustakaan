<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'app')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
</head>
<body>
    @include('components.sidebar')
    @include('components.navbar')
    {{-- <div class="p-4 sm:ml-64 mt-7"> --}}
    <div class="p-4 sm:ml-64 mt-7">
        @yield('content')
    </div>

    <script>
        const togglePassword = document.getElementById('toggle-password');
        const passwordField = document.getElementById('new-password');

        if (togglePassword) {
            togglePassword.addEventListener('click', function () {
                const type = passwordField.type === 'password' ? 'text' : 'password';
                passwordField.type = type;
                togglePassword.innerHTML = type === 'password' ?
                    '<i class="far fa-eye w-5 h-5 text-gray-500 dark:text-white"></i>' :
                    '<i class="far fa-eye-slash w-5 h-5 text-gray-500 dark:text-white"></i>';
            });
        }
    </script>
<script src="https://unpkg.com/flowbite@6.0.0/dist/flowbite.min.js"></script>
</body>
</html>