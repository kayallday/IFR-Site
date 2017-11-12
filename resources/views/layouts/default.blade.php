<html>
<head>
  @include('includes.head')
</head>
<body>
  <div class="container">
    <header class="row">
      @include('includes.header')
    </header>

    <main role="main">

        @yield('content')

    </main>

    <footer class="container">
        @include('includes.footer')
    </footer>

  </div>
</body>
</html>
