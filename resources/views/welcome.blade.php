<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>

    <!-- Tailwind CSS (If not already included) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
        @if (Route::has('login'))
            <div class="absolute top-5 right-5">
                @auth
                    <div class="relative inline-block text-left">
                        <!-- Button to Open Dropdown -->
                        <button id="userMenuButton" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:ring-2 focus:ring-gray-400 rounded-lg px-4 py-2">
                            {{ Auth::user()->name }} ▼
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</button>
                            </form>
                        </div>
                    </div>

                    <!-- JavaScript for Toggling Dropdown -->
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const button = document.getElementById("userMenuButton");
                            const menu = document.getElementById("userMenu");

                            button.addEventListener("click", function (event) {
                                event.stopPropagation();
                                menu.classList.toggle("hidden");
                            });

                            document.addEventListener("click", function () {
                                menu.classList.add("hidden");
                            });

                            menu.addEventListener("click", function (event) {
                                event.stopPropagation();
                            });
                        });
                    </script>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:ring-2 focus:ring-gray-400 rounded-lg px-4 py-2">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:ring-2 focus:ring-gray-400 rounded-lg px-4 py-2">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
