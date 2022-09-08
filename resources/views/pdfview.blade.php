@extends('layouts.main')

@section('container')
    <main>
        <div class="row gap-5 mb-5" id="semua">
            @include('layouts.pdfview')


            <!-- bagian kanan -->
            @include('layouts.leftcontent')
        </div>
        @include('layouts.pdfcomment')
        @include('layouts.galery')

    </main>
@endsection
