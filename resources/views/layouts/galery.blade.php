<script src={!! asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') !!}></script>

<div class="flex-lg-row flex-sm-col">
    <div class="d-lg-flex justify-content-lg-evenly ">
        {{-- galeri foto --}}
        <div class="col-5  my-5 py-5 shadow-lg" style="background-color: #ffffff" id="kanan">
            <div class="row">
                <div class="justify-content-center">
                    <div class="row justify-content-center" style="background-color: rgba(196, 196, 196, 0.17);"
                        id="tulisan">
                        <h2>Galeri Foto</h2>
                    </div>
                </div>
                <div class="container ">
                    <div id="carouselExampleControls1" class="carousel slide" data-db-ride="carousel">
                        <div class="carousel-inner  " id="vidio">
                            @php
                                $active = "active"
                            @endphp
                            @foreach ($image as $data)
                            <div class="carousel-item {{ $active }}">
                                <div class="  d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row" id="ini">
                                   
                                    <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                                        <li> @if($data->id > 5)
                        <img src="/app/{{ $data->image }}" class="img-fluid rounded-start" alt="...">
                        
                        @else
                        <img data-enlargable src="/storage/{{ $data->image }}"
                                                class="rounded float-start img-fluid"
                                                alt="..." >
                        @endif
                                            
                                            </li>
                             
                                     
                                    </ul>
                         
                                   
                                   
    
                                </div>
                            </div>
                            @php
                                $active = "   "
                            @endphp
                            @endforeach
                    
             
                       
               
           
                      
                    
                
                          
                        </div>


                        <div class="container">
                            <button class="bton" type="button" data-bs-target="#carouselExampleControls1"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="bton " type="button" data-bs-target="#carouselExampleControls1"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    {{-- <div class="col-lg-2 mt-5 ms-5" id="framee">
                        <script src="https://apps.elfsight.com/p/platform.js" id="framee" defer></script>
                        <div class="elfsight-app-56fea6fa-e62f-40ca-9381-e2373b22213f" id="framee"></div>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- galeri video --}}
        <div class="col-5   my-5 py-5 ps-4 shadow-lg" style="background-color: #ffffff" id="kanan">
            <div class="row">
                <div class="justify-content-center">
                    <div class="row justify-content-center" style="background-color: rgba(196, 196, 196, 0.17);"
                        id="tulisan">
                        <h2>Galeri Video</h2>
                    </div>
                </div>
                
                <div class="container ">
                    <div id="carouselExampleControls2" class="carousel slide" data-db-ride="carousel">
                        <div class="carousel-inner  " id="vidio">
                            <div class="carousel-item active">
                                <div class=" gap-3 d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row"
                                    id="ini">
                                    <ul class="list-group col-sm-4 offset-sm-4 me-2 " id="gal">


                                        <li> <iframe id="player" type="text/html" width="180" height="120"
                                                src="https://www.youtube.com/embed/faR3YhwqXgs"
                                                frameborder="0"></iframe></li>



                                        <li> <iframe id="player" type="text/html" width="180" height="120"
                                                src="https://www.youtube.com/embed/XNEUnRIUafw"
                                                frameborder="0"></iframe></li>


                                    </ul>
                                    <ul class="list-group col-sm-4 offset-sm-4 " id="gal">


                                        <li> <iframe id="player" type="text/html" width="180" height="120"
                                                src="https://www.youtube.com/embed/nhfqnXI4-nI"
                                                frameborder="0"></iframe></li>



                                        <li> <iframe id="player" type="text/html" width="180" height="120"
                                                src="https://www.youtube.com/embed/zZJRaOdooJY"
                                                frameborder="0"></iframe></li>


                                    </ul>

                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="gap-3  d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row"
                                    id="ini">
                                    <ul class="list-group col-sm-4 offset-sm-4  " id="gal">
                                        <li><iframe id="player" type="text/html" width="180" height="120"
                                                src="https://www.youtube.com/embed/iOXmtijnPeM"
                                                frameborder="0"></iframe></li>

                                        <li> <iframe id="player" type="text/html" width="180" height="120"
                                                src="https://www.youtube.com/embed/WF-mVsj57_w"
                                                frameborder="0"></iframe></li>
                                    </ul>
                                    <ul class="list-group col-sm-4 offset-sm-4 " id="gal">

                                        <li> <iframe id="player" type="text/html" width="180" height="120"
                                                src="https://www.youtube.com/embed/svGlLpTlj2s"
                                                frameborder="0"></iframe></li>

                                        <li> <iframe id="player" type="text/html" width="180" height="120"
                                                src="https://www.youtube.com/embed/XvpsAviIL7U"
                                                frameborder="0"></iframe></li>
                                    </ul>

                                </div>
                            </div>
                       
                        </div>


                        <div class="container">
                            <button class="bton" type="button" data-bs-target="#carouselExampleControls2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="bton " type="button" data-bs-target="#carouselExampleControls2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                
                
               
              
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('img[data-enlargable]').addClass('img-enlargable').click(function() {
        var src = $(this).attr('src');
        $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            $(this).remove();
        }).appendTo('body');
    });
</script>
