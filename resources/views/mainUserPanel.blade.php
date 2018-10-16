@include('partials._head')
  <body>
@include('partials._navbar')

        <div class="container">
                @yield('content')
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    

 
@include('partials._scripts')
 
  </body>
</html>