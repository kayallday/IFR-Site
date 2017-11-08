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
      <div class="col-md-12">
        @include('includes.footer')
      </div>
    </footer>

  </div>
</body>
</html>
