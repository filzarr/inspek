{{-- <div class="col-8 mt-5 ms-lg-5 shadow-lg " id="posting" style="background-color: white">
    <div class="row">
        <div class="fs-1 ms-lg-5 mt-4 me-3 fw-bolder text-sm-start text-wrap text-break text-center">
            <p style="'Trebuchet MS', sans-serif;" id="teks">PPID Inspektorat Sumatera Utara</p>
        </div>
        

        
        <div class="col mt-lg-5 ms-lg-5 me-lg-5 fs-5 pb-5" id="artikels">
            <div class=" ms-lg-0 table-responsive">
                <table class="table table-striped table-bordered  table-hover fs-5">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tanggal dibuat</th>
                        <th scope="col">Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $item)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td><a href="storage/{{ $item->pdf }}" target="_blank">lihat</a> </td>
                      </tr>
                      @endforeach
                     
                 
                   
                    </tbody>
                   
                  </table>
            </div>
        </div>

       




    </div>
</div> --}}
@section('css')
    <style>
        body {
            background-color: white !important;
        }
        .masthead {
    height: 80vh;
    min-height: 500px;
    background: rgba(0, 0, 0, 0.656)  url('../img/inspek.jpeg');
    background-blend-mode: darken;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
    </style>
@endsection
<header class="masthead">
  <div class="container h-100">
      <div class="row h-100 align-items-center">
          <div class="col-12 text-center ">
              <h1 class="fw-light" style="color: rgb(0, 208, 255)">Selamat Datang Di PPID Sumatera Utara</h1>
              <p class="lead text-break"style="color: white">Pejabat Pengelola Informasi dan Dokumentasi (PPID) <br> Pembantu pada PPID Utama Prov. Sumatera Utara</p>

          </div>
      </div>
  </div>
</header>




<div class="container py-5">

  <div class="d-lg-flex justify-content-lg-evenly">
   
   
          <div class="col-lg-2  col-sm-5 mt-lg-0 mt-5" id="ppid" >
            <i class="bi bi-newspaper"></i> 
            <h3>Data Lengkap</h3>
            <p>Data Informasi Publik disajikan lengkap & merupakan informasi yang diijinkan untuk dipublikasikan.</p>
          
          </div>
          <div class="col-lg-2  col-sm-5 mt-lg-0 mt-5" id="ppid" >
            <i class="bi bi-chat-dots-fill"></i>
            <h3>Akses Mudah</h3>
            <p>Seluruh data informasi dapat diakses melalui website Inspektorat maupun Open Data Provinsi Sumatera Utara.</p>
          </div>
          <div class="col-lg-2  col-sm-5 mt-lg-0 mt-5" id="ppid">
            <i class="bi bi-bar-chart-fill"></i>
            <h3>Online</h3>
            <p>Demi kemudahan di era digital, seluruh data Informasi Publik dapat diakses menggunakan internet.</p>
          </div>
      


  </div>
</div>
<div class="container  my-5 py-5"  id="saber">
  <div class="row align-items-center">
      <div class="col-12 text-center ">
          <h1 class="fw-light" style="font-size: xx-larger; font-weight:bolder;">Formulir Publik

          </h1>
          <div class="row justify-content-center align-items-center">
              <div class="col-3">
                <i class="bi bi-file-earmark-text-fill" style="font-size: 150px; color:rgb(1, 72, 142);"></i>
                  <a href="/form">
                    <p style="font-size: large">Form Permohonan Informasi</p>
                  </a>
              </div>
           
              <div class="col-3">
                <i class="bi bi-file-earmark-text-fill" style="font-size: 150px; color:rgb(1, 142, 142);"></i>
                  <a href="/form">
                    <p style="font-size: large">Form Pengajuan Keberatan</p>
                  </a>
              </div>
           
             
          </div>

      </div>

  </div>

</div>
<div class="container  my-5 py-5"  id="saber">
  <div class="row align-items-center">
      <div class="col-12 text-center ">
          <h1 class="fw-light" style="font-size: xx-larger; font-weight:bolder;">Informasi Berkala

          </h1>
          <div class=" ms-lg-0 table-responsive">
            <table class="table table-striped table-bordered  table-hover fs-5">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal dibuat</th>
                    <th scope="col">Detail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($informasiberkala as $item)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td><a href="app/{{ $item->pdf }}" target="_blank">lihat</a> </td>
                  </tr>
                  @endforeach
                 
             
               
                </tbody>
               
              </table>
        </div>

      </div>

  </div>

</div>
<div class="container  my-5 py-5"  id="saber">
  <div class="row align-items-center">
      <div class="col-12 text-center ">
          <h1 class="fw-light" style="font-size: xx-larger; font-weight:bolder;">Daftar Informasi Publik

          </h1>
          <div class=" ms-lg-0 table-responsive">
            <table class="table table-striped table-bordered  table-hover fs-5">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal dibuat</th>
                    <th scope="col">Detail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($informasipublik as $item)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td><a href="app/{{ $item->pdf }}" target="_blank">lihat</a> </td>
                  </tr>
                  @endforeach
                 
             
               
                </tbody>
               
              </table>
        </div>

      </div>

  </div>

</div>