<div class="float-sm-start   mx-4 mt-5 col-3" id="kirii" style="background-color: #ffffff">
    <div class="row" id="kotak">
        <div class="float-sm-start pt-3" id="isi">
            <img style="width: 100%" src="img/kepala.jpg" alt="">
        </div>
    </div>

    <div class="container  justify-content-center pt-4 mt-5  px-0">
        <div class="col-sm-3" style="background-color: rgba(196, 196, 196, 0.17);" id="bawah">
            <h2></h2>
        </div>
    </div>



    <div class="container  justify-content-center pt-1 mt-2  px-0">
        <div class="col-sm-3" style="background-color: rgba(196, 196, 196, 0.17);" id="blog">
            <h2>Berita Terpopuler</h2>
        </div>
    </div>
    <div class="row-sm mx-1 mt-3 pt-5" id="populer">
        <div class="container ">
            @foreach ($beritapopuler as $item)
                <div class="card mb-2 border-0 mt-zz" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ url("storage/$item->image") }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/post/{{ $item->id }}"
                                        style="text-decoration: none;color: #000000 !important">{{ $item->title }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

   
</div>
