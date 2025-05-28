<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>StretchTec</title>
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="flex min-h-screen bg-gray-100">
<!-- Sidebar -->
<aside class="w-64 bg-gradient-to-b from-white to-amber-600 min-h-screen shadow-md flex flex-col">
<div class="flex items-center p-4 text-xl font-bold text-gray-700 border-b">
<img src="{{ asset('images/mainLogo.png') }}" alt="Logo" class="h-18 w-60 mr-2" />
</div>

<!-- Main nav container with space between items and logout -->
<nav class="flex flex-col justify-between flex-1 p-4 text-base font-bold text-amber-900">
<!-- Menu items -->
<ul class="space-y-2">
    <li>
    <a href="/" class="flex items-center px-4 py-2 rounded hover:bg-gray-200">
        <img src="{{ asset('icons/statisctics.png') }}" alt="Dashboard Icon" class="w-6 h-6 mr-5" />
        <span>Dashboard</span>
    </a>
    </li>

    <li>
    <a href="{{ route('employee') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-200">
        <img src="{{ asset('icons/employee.png') }}" alt="Employee Icon" class="w-6 h-6 mr-5" />
        <span>Employee Management</span>
    </a>
    </li>

    <li>
    <a href="{{ route('leave') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-200">
        <img src="{{ asset('icons/mail.png') }}" alt="Leave Icon" class="w-6 h-6 mr-5" />
        <span>Leave Management</span>
    </a>
    </li>
    <li>
    <a href="{{ route('addUsers') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-200">
        <img src="{{ asset('icons/adduser.png') }}" alt="Leave Icon" class="w-6 h-6 mr-5" />
        <span>Add Users</span>
    </a>
    </li>
    <li>
    <!-- <a href="login" class="flex items-center px-4 py-2 rounded hover:bg-gray-200">
        <img src="{{ asset('icons/adduser.png') }}" alt="Leave Icon" class="w-6 h-6 mr-5" />
        <span>Login</span>
    </a>
    </li> -->
</ul>

<!-- Fixed logout section at the bottom -->
<div class="border-t mt-4 rounded">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="w-full flex items-center px-4 py-3 rounded hover:bg-gray-200 text-amber-900">
            <img src="{{ asset('icons/close.png') }}" alt="Logout Icon" class="w-6 h-6 mr-4" />
            <span class="flex-1 text-left">Logout</span>
        </button>
    </form>
</div>


</nav>
</aside>

</body>
</html>
