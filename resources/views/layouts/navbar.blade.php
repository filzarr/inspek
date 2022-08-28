<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(50, 130, 184, 0.8);">
    <div class="container justify-content-lg-center justify-content-sm-start" id="main_nav">
        <ul class="navbar-nav">
            <li class="nav-item active"> <a class="nav-link" href="/">Home </a> </li>
            @foreach ($head as $head)
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">{{ $head->judul }}</a>
                    <ul class="dropdown-menu" style="background-color: rgb(50, 130, 184)">
                        @php
                            $subhead = App\Models\Navbar::with('menu')
                                ->where('judul_id', '=', $head->id)
                                ->get();
                        @endphp
                        @foreach ($subhead as $item)
                            <li>
                                <a class="dropdown-item" href="#">{{ $item->menu }}</a>


                                <ul class="submenu dropdown-menu " style="background-color: rgb(50, 130, 184)">

                                    @php
                                        $submenu = App\Models\Submenu::with('Navbar')
                                            ->where('navbar_id', '=', $item->id)
                                            ->get();
                                    @endphp
                                    @foreach ($submenu as $data)
                                        <li>
                                            <a class="dropdown-item" href="/download/{{ $data->id }}">{{ $data->submenu }}</a>
                                        </li>
                                    @endforeach



                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
            {{-- <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-bs-toggle="dropdown">Regulasi</a>
            <ul class="dropdown-menu" style="background-color: rgb(50, 130, 184)">
            <li><a class="dropdown-item" href="#">Tugas dan fungsi</a>
               <ul class="submenu dropdown-menu" style="background-color: rgba(50, 130, 184, 0.8)">
                <li><a class="dropdown-item" href="#">2021</a></li>
                <li><a class="dropdown-item" href="#">2022</a></li>
                <li><a class="dropdown-item" href="#">2023</a></li>
             </ul>
            </li>
            <li><a class="dropdown-item" href="#">Struktur</a>
              <ul class="submenu dropdown-menu" style="background-color: rgba(50, 130, 184, 0.8)">
               <li><a class="dropdown-item" href="#">2021</a></li>
               <li><a class="dropdown-item" href="#">2022</a></li>
               <li><a class="dropdown-item" href="#">2023</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="#">Data pegawai</a>
              <ul class="submenu dropdown-menu" style="background-color: rgba(50, 130, 184, 0.8)">
               <li><a class="dropdown-item" href="#">2021</a></li>
               <li><a class="dropdown-item" href="#">2022</a></li>
               <li><a class="dropdown-item" href="#">2023</a></li>
              </ul>
            </li>
            </ul>
        </li>
        <li class="nav-item dropdown"> <a class="nav-link" href="#" data-bs-toggle="dropdown"> Pedoman Dan Standar</a>
          <ul class="dropdown-menu" style="background-color: rgb(50, 130, 184)">
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2022</a></li>
            <li><a class="dropdown-item" href="#">2023</a></li>
          </ul>
        </li> --}}

        </ul>
    </div>
</nav>
