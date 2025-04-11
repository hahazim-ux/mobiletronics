<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 h-screen flex flex-col">

    <div class="flex h-full">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white flex flex-col justify-between h-full">
            <div>
                <div class="p-5 font-bold text-lg">Admin Panel</div>
                <ul>
                    <li class="p-3 hover:bg-gray-800"><a href="#">Home</a></li>
                    <li class="p-3 hover:bg-gray-800"><a href="#">FAQ</a></li>
                    <li class="p-3 hover:bg-gray-800"><a href="#">Renters</a></li>
                    <li class="p-3 hover:bg-gray-800"><a href="#">Admins</a></li>
                    <li class="p-3 hover:bg-gray-800"><a href="#">Listings</a></li>
                    <li class="p-3 hover:bg-gray-800"><a href="#">Complains</a></li>
                    <li class="p-3 hover:bg-gray-800"><a href="#">Payments</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-5 overflow-y-auto">
            <h1 class="text-lg font-bold mb-4">@yield('title')</h1>
            @yield('content')
        </div>
    </div>

</body>
</html>

