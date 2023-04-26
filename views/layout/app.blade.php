<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="container bg-gray-700">
    <div class="flex  items-center justify-between">
      <div><h1 class="text-slate-50 font-bold ">Laravel</h1></div>
      <div class="md:flex space-x-1 items-center">
      <a href="#" class="rounded-full px-6 py-2  bg-gray-700 text-slate-50  hover:bg-slate-900  hover:text-slate-50">login</a>
      <a href="#" class="rounded-full px-6 py-2  bg-gray-700 text-slate-50  hover:bg-slate-900  hover:text-slate-50">regester</a>
      </div>
    </div>
  </nav>
  <div> @yield('content')</div>



<div>@include('layout.footer')</div>
</body>
</html>