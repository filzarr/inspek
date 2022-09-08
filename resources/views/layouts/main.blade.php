<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href={!! asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css") !!} rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <script type="text/javascript" src={!! asset("https://www.gstatic.com/charts/loader.js") !!}></script>
    <link href={!! asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css") !!} rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href={!! asset("css/bootstrap.css") !!}>
    <link rel="stylesheet" href={!! asset("css/css.css") !!}>
    <link rel="stylesheet" href={!! asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css") !!}>
    <link rel="stylesheet" href={!! asset("https://cdnjs.com/libraries/Chart.js") !!}>
    <link rel="icon" href={{ url("img/logo_inspektorat.png") }} type="image/icon type">
    <title>Inspektorat Sumut</title>
  </head>
  <body>
    @include('layouts.header')
    @include('layouts.navbar')

    
    @yield('container')
   
      @include('layouts.footer')
      <script src={!! asset("https://code.jquery.com/jquery-3.2.1.slim.min.js")!!} integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src={!! asset("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js") !!} integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src={!! asset("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js") !!} integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    {{-- <script src="js/carousel"></script> --}}
    <script src={!! asset("js/js.js")!!}></script>
    <script type="text/javascript">
      //starts the carousel
      $document.ready(function () {
          $('#myCarousel').carousel();
      });
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>