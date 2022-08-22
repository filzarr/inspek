
<div class="flex-lg-row flex-sm-col">
    <div class="d-lg-flex justify-content-lg-evenly ">
      <div class="col-5  my-5 py-5 " style="background-color: #ffffff" id="kanan">
        <div class="row">
          <div class="justify-content-center" >
            <div class="row justify-content-center" style="background-color: rgba(196, 196, 196, 0.17);" id="tulisan">
              <h2>Galeri Foto</h2>
            </div>
          </div>
          <div class="container " >
            <div id="carouselExampleControls1" class="carousel slide" data-db-ride="carousel">
              <div class="carousel-inner  " id="vidio" >
                  <div class="carousel-item active">
                    <div class="  d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row" id="ini">
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                     
                    </div>
                  </div>
            
                  <div class="carousel-item">
                    <div class="  d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row" id="ini">
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                     
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="  d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row" id="ini">
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                     
                    </div>
                  </div>
              </div>
            
           
              <div class="container">
                <button class="bton" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="bton " type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-5   my-5 py-5 ps-4" style="background-color: #ffffff" id="kanan" >
        <div class="row">
          <div class="justify-content-center" >
            <div class="row justify-content-center" style="background-color: rgba(196, 196, 196, 0.17);" id="tulisan">
              <h2>Galeri Video</h2>
            </div>
          </div>
          
          <div class="container " >
            <div id="carouselExampleControls2" class="carousel slide" data-db-ride="carousel">
              <div class="carousel-inner  " id="vidio" >
                  <div class="carousel-item active">
                    <div class="  d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row" id="ini">
                      <ul class="list-group col-sm-4 offset-sm-4 me-2 " id="gal">
                        
                            
                        <li> <iframe id="player" type="text/html" width="180" height="200"
                          src="http://www.youtube.com/embed/{{ $hasil['items'][0]['id']['videoId']}}"
                          frameborder="0"></iframe></li>
                      
                       
                            
                        <li> <iframe id="player" type="text/html" width="180" height="200"
                          src="http://www.youtube.com/embed/{{ $hasil['items'][1]['id']['videoId']}}"
                          frameborder="0"></iframe></li>
               
              
                      </ul>
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                       
                            
                        <li> <iframe id="player" type="text/html" width="180" height="200"
                          src="http://www.youtube.com/embed/{{ $hasil['items'][2]['id']['videoId']}}"
                          frameborder="0"></iframe></li>
                     
                       
                            
                        <li> <iframe id="player" type="text/html" width="180" height="200"
                          src="http://www.youtube.com/embed/{{ $hasil['items'][3]['id']['videoId']}}"
                          frameborder="0"></iframe></li>
                     
                       
                      </ul>
                     
                    </div>
                  </div>
            
                  <div class="carousel-item">
                    <div class="  d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row" id="ini">
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                     
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="  d-flex justify-content-evenly ms-5 ps-5 my-5 float-lg-row" id="ini">
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh1.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                      <ul class="list-group col-sm-4 offset-sm-4 " id="gal">
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." " ></li>
                        <li> <img src="img/contoh2.jpg" class="rounded float-start img-fluid" alt="..." "></li>
                      </ul>
                     
                    </div>
                  </div>
              </div>
            
           
              <div class="container">
                <button class="bton" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="bton " type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
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
