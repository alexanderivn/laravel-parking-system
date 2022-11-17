<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Parking System</title>
</head>
<body class="subpixel-antialiased">
<main>
  <div class="font-roboto flex h-screen bg-gray-200" x-data="{ sidebarOpen: false }">
    <x-sidebar/>
    <x-header>
      <x-slot:content>
        {{$slot}}
      </x-slot:content>
    </x-header>
  </div>
</main>
</body>
</html>