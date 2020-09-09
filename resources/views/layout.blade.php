<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <title>Hello, world!</title>
    <script>{{ asset('js/javascript.js') }} </script>

    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
  </head>

  <body>
    <center>
        <br>
        <img src="{{ asset('fotos/cut.jpg') }}" alt="imagen" class="col-4">
        <div class="text m-b-md">
             + v a n<img src="{{ asset('fotos/c.png') }}" alt="imagen" class="image col-1">o u v e r
        </div>
        <div class="smallsize">B l o g a b o u t J a c o b M a r k s t r ö m <i class="em em-flag-ca" aria-role="presentation" aria-label="Canada Flag"></i> </div>
        <br>


        @yield('content')
    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
