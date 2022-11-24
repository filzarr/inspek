<section id="table" class="shadow-lg" style="background-color: #f3f3f3" style="padding: 16px" style="margin-bottom: 10px" >
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
      <div class="carousel-inner">
        @php
            $active = "active";
        @endphp
        @foreach ($carousel as $data)
        <div class="carousel-item {{ $active }}">
          <img src="app/{{ $data->image }}" class="d-block w-100" style="height: 550px" alt="...">
        </div>
            @php
                $active = " "
            @endphp
        @endforeach
       
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
  </section>