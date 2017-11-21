<html>
<head>
  @include('includes.head')
</head>
<body>
  <!-- <div class="container"> -->
    <header class="row">
      @include('includes.header')
    </header>

    <main role="main">

        @yield('content')

        <div class="social-icons">
          @include('includes.social')
        </div>

    </main>

    <footer class="foot bkgrnd-img">
        @include('includes.footer')
    </footer>

  <!-- </div> -->

  <!-- load bootstrap scripts from cdn -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
