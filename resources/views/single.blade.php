@extends('layouts.main')

@section('container')
    <main>
        <div class="row gap-5" id="semua">
            @include('layouts.navbarsingle')

            <!-- bagian kanan -->
            @include('layouts.leftcontent')
        </div>

        @include('layouts.galery')
    </main>
@endsection
