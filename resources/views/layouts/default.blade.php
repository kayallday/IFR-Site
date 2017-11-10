<html>
<head>
  @include('includes.head')
</head>
<body>
  <div class="container">
    <header class="row">
      @include('includes.header')
    </header>

    <div class="main" class="row">
      <div class="col-md-12">

        @yield('content')

      </div>
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

  </div>
</body>
</html>
