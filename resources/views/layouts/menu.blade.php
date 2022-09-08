<div class="col-8 mt-5 ms-lg-5 pb-5 " id="posting" style="background-color: white">
    @foreach ($menu as $item)
    <h1 class="text-center justify-content-center d-flex mt-5">{{ $item->menu }}</h1>
    @endforeach
    
    @foreach ($data as $item)
    <div class="container">
        <div class="row border-bottom">
            <div class="col-1 ">
        
                    <i class="bi bi-file-earmark-pdf-fill fs-1"  id="iconpdf"></i>
        
        
            </div>
            <div class="col-1 mt-5 ">
                <a href="/pdf/{{ $item->id }}"style="text-decoration:none;">
                    <h2 style="color: black" id="pdff">{{ $item->submenu }}</h2>
                </a>
            </div>
            <div class="col-1 ms-0 mt-5 justify-content-end" id="btnn">
                <a href="/download/{{ $item->id }}"><button href class="bi bi-download" id="btndownload" ></button></a>
            </div>
        </div>
    </div>
    @endforeach
  
   
</div>
