<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href={!! asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css") !!} rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Hello, world!</title>
  </head>
  <body>
    @include('layouts.header')
    @include('layouts.navbar')
    <!-- carousel -->

    <main>
      <div class="row gap-5" id="semua">
        @include('layouts.post')
    

      <!-- bagian kanan -->
      @include('layouts.leftcontent')
    </div>

    <div class="container mt-5" style="background-color: white">
    <div class="be-comment-block">
        <h1 class="comments-title">Comments (3)</h1>
        <div class="be-comment">
            <div class="be-img-comment">	
                <a href="blog-detail-2.html">
                    <img src="img/blank.png" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">
                
                    <span class="be-comment-name">
                        <a href="blog-detail-2.html">Ravi Sah</a>
                        </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                        May 27, 2015 at 3:14am
                    </span>
    
                <p class="be-comment-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias tempore dolores saepe sequi quam consequatur id ea, et dolore voluptatem itaque eligendi, sapiente iste enim vero nostrum culpa provident.
                </p>
            </div>
        </div>
        <div class="be-comment">
            <div class="be-img-comment">	
                <a href="blog-detail-2.html">
                    <img src="img/blank.png" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">
                <span class="be-comment-name">
                    <a href="blog-detail-2.html">Phoenix, the Creative Studio</a>
                </span>
                <span class="be-comment-time">
                    <i class="fa fa-clock-o"></i>
                    May 27, 2015 at 3:14am
                </span>
                <p class="be-comment-text">
                    Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros commodo. Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant. Proin ut ornare lectus, vel eleifend est. Fusce hendrerit dui in turpis tristique blandit.
                </p>
            </div>
        </div>
        <div class="be-comment">
            <div class="be-img-comment">	
                <a href="blog-detail-2.html">
                    <img src="img/blank.png" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">
                <span class="be-comment-name">
                    <a href="blog-detail-2.html">Cüneyt ŞEN</a>
                </span>
                <span class="be-comment-time">
                    <i class="fa fa-clock-o"></i>
                    May 27, 2015 at 3:14am
                </span>
                <p class="be-comment-text">
                    Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant
                </p>
            </div>
        </div>
        <form class="form-block">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group fl_icon">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <input class="form-input" type="text" placeholder="Your name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 fl_icon">
                    <div class="form-group fl_icon">
                        <div class="icon"><i class="fa fa-envelope-o"></i></div>
                        <input class="form-input" type="text" placeholder="Your email">
                    </div>
                </div>
                <div class="col-xs-12">									
                    <div class="form-group">
                        <textarea class="form-input" required="" placeholder="Your text"></textarea>
                    </div>
                </div>
                <a class="btn btn-primary pull-right">submit</a>
            </div>
        </form>
    </div>
    </div>
      @include('layouts.galery')
    </main>
   
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
  </body>
</html>