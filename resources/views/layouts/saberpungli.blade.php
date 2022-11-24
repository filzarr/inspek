@section('css')
    <style>
        body {
            background-color: white !important;
        }
        .masthead {
    height: 80vh;
    min-height: 500px;
    background:rgba(0, 0, 0, 0.319) url('../img/logosaberpungli.png');
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
                <h1 class="fw-light" style="color: rgb(255, 55, 0)">Saber Pungli</h1>
                <p class="lead" style="color: wheat">Lapor Setiap Pungli Yang terjadi disekitar anda</p>
                <a href="/formpungli" target="_blank"><button class="btn btn-primary">Lapor</button></a>
            </div>
        </div>
    </div>
</header>


<div class="container py-5 "  id="saber">
    <div class="row align-items-center">
        <div class="col-12 text-center my-5 py-5">
            <h1 class="fw-light" style="">Apa itu saber pungli?</h1>
            <p class="lead mx-5  mt-5">Satuan Tugas Sapu Bersih Pungutan Liar adalah unit pemberantasan pungutan liar
                mempunyai tugas melaksanakan pemberantasan pungutan liar secara efektif dan efesien dengan
                mengoptimalkan pemanfaatan personil, satuan kerja, dan sarana prasarana, baik yang berada di seluruh
                Sumatera Utara.</p>

        </div>
        <div class="container my-5 py-5" id="tugas">
            <div class="d-md-flex">
                <div class="row align-items-center align-items-md-start">
                    <div class="col-md-8 col-12 text-center text-md-start ">
                        <h1 class="fw-light  mx-md-5  mt-5" style="">Tugas Saber Pungli Sumatera Utara</h1>
                        <p class="lead mx-5   mt-5">Satuan Tugas Sapu Bersih Pungutan Liar adalah unit pemberantasan pungutan
                            liar mempunyai tugas melaksanakan pemberantasan pungutan liar secara efektif dan efesien dengan
                            mengoptimalkan pemanfaatan personil, satuan kerja, dan sarana prasarana, baik yang berada di seluruh
                            Sumatera Utara.</p>
                    </div>
                </div>
                <div class="row align-items-center align-items-md-end">
                    <div class="col-3 text-center text-md-end">
                        <img src="img/upp.jpg" alt="" width="500" height="500">
                    </div>
                </div>
            </div>
        </div>
        <div class="container  my-5 py-5"  id="saber">
            <div class="row align-items-center">
                <div class="col-12 text-center ">
                    <h1 class="fw-light" style="font-size: xx-larger; font-weight:bolder;">Wewenang
                        SABER PUNGLI
        
                    </h1>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-7">
                            <i class="bi bi-check-circle-fill" style="font-size: 40px; color:green;"></i>
                            <span class="lead ms-2  mt-5">Membangun sistem pencegahan dan pemberantasan Pungutan Liar</span>
                        </div>
                        <div class="col-7 align-items-center">
                            <i class="bi bi-check-circle-fill" style="font-size: 40px; color:green;"></i>
                            <span class="lead ms-2 text-break  mt-5">Melakukan pengumpulan data dan informasi dari Instansi Vertikal/Perangkat Daerah dan Pihak lain yang terkait dengan menggunakan Teknologi Informatika</span>
                        </div>
                        <div class="col-7">
                            <i class="bi bi-check-circle-fill" style="font-size: 40px; color:green;"></i>
                            <span class="lead ms-2  mt-5">Membangun sistem pencegahan dan pemberantasan Pungutan Liar</span>
                        </div>
                    </div>
        
                </div>
        
            </div>
        
        </div>
        <div class="container  my-5 py-5" id="tugas" >
            <div class="row align-items-center">
                <div class="col-12 text-center ">
                    <h1 class="fw-light" style="font-size: xx-larger; font-weight:bolder;">Struktur Saber Pungli Sumatera Utara
        
                    </h1>
                    <div class="row justify-content-center align-items-center mt-5">
                        <img src="img/strukture.jpg" alt="" style="width: 80vw; height:100;">
                    </div>
        
                </div>
        
            </div>
        
        </div>
        <div class="col-12 text-center my-5 py-5">
            <h1 class="fw-light" style="">Langkah Untuk Melapor</h1>
            <div class="d-flex justify-content-evenly mt-5">
                <div class="row  align-items-center">
                    <i class="bi bi-link" style="font-size: 60px"></i>
                    <p>Kunjungi <a href="/formpungli">Link</a> form Pelaporan</p>
                </div>
                <div class="row  align-items-center">
                    <i class="bi bi-file-earmark-text" style="font-size: 60px"></i>
                    <p>Buat Laporan Dengan cara mengisi <br> form yang sudah disediakan</p>
                </div>
                <div class="row  align-items-center">
                    <i class="bi bi-arrow-right-square-fill" style="font-size: 50px"></i>
                    <p>Dalam 5 hari,<br> instansi akan menindaklanjuti dan <br> membalas laporan Anda <br> </p>
                </div>
                <div class="row  align-items-center">
                    <i class="bi bi-check-lg" style="font-size: 60px"></i>
                    <p>Laporan Anda akan terus ditindaklanjuti <br> hingga terselesaikan </p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row align-items-end " id="saber">
    <div class="col-12 text-end ">
        <img src={{ url('img/logo_inspektorat.png') }} alt="" width="60" height="60">
        <img src={{ url('img/logopolda.png') }} alt="" width="60" height="60">
        <img src={{ url('img/bukitbarisan.png') }} alt="" width="60" height="60">
        <img src={{ url('img/kejaksaan.png') }} alt="" width="60" height="60">
    </div>
</div>
