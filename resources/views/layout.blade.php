<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?=asset('css/app.css')?>" rel="stylesheet">
    <title>
    @yield('title')
    </title>
  </head>
  {{--  <body>  --}}
      @yield('classAwal')
  <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>

        <form class="d-flex">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contact</a>
        </form>
        

      </div>
</nav>

      <center>
      <h1>@yield('title')</h1>
      </center>
  @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->
    {{--  <script src="<?=asset('js/app.js')?>"></script>  --}}

<script>
  $('.btn-expand-collapse').click(function(e) {
      $('.navbar-primary').toggleClass('collapsed');
  });
</script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>  --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    {{--  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>  --}}
    -->
  {{--  </body>  --}}
</html>