<!doctype html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div data-theme="light" class="layouts select-none flex flex-col w-screen h-screen bg-stone-100 font-poppins">
    @yield('main-layouts')
  </div>
</body>
</html>