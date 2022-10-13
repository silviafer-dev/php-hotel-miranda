<!doctype html>
<html>
<head>
   @include('head')
</head>
<body>
<div class="header">
   <header class="row">
       @include('header')
   </header>
   <main  >
           @yield('content')
   </main>
   <footer >
       @include('footer')
   </footer>
</div>
</body>
</html>