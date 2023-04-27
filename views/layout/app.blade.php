<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&family=DM+Sans:ital,wght@0,400;0,700;1,400&family=DM+Serif+Display&family=Montserrat:wght@400;700&family=Open+Sans:ital,wght@0,300;1,300&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Work+Sans:ital,wght@0,200;0,500;0,700;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="container bg-gray-700">
    <div class="flex  items-center justify-between p-2">
      <div><h1 class="text-slate-50 font-bold ">Laravel</h1></div>
      <div class="md:flex space-x-1 items-center">
      <a href="#" class="rounded-full px-6 py-2  bg-gray-700 text-slate-50  hover:bg-slate-900  hover:text-slate-50">login</a>
      <a href="#" class="rounded-full px-6 py-2  bg-gray-700 text-slate-50  hover:bg-slate-900  hover:text-slate-50">regester</a>
      </div>
    </div>
  </nav>
   @yield('content')



<div>@include('layout.footer')</div>
</body>
</html>