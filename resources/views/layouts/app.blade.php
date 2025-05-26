<!DOCTYPE html>
<html lang="en" x-data="{}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'StretchTec')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="flex min-h-screen bg-gray-100">

  <!-- Sidebar -->
  @include('components.sidebar')

  <!-- Main Content -->
  <main class="flex-1 p-6">
    @yield('content')
  </main>

  <!-- Scripts -->
  @yield('scripts')

</body>
</html>
