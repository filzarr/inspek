
@extends('layouts.main')

@section('container')
    <!-- carousel -->
    @include('layouts.carousel')
<main>
  <div class="row gap-4" id="semua">
  <!-- bagian sebelah kiri -->
  @include('layouts.rightcontent')

  <!-- bagian tengah -->
  @include('layouts.midcontent')

  <!-- bagian kanan -->
  @include('layouts.leftcontent')
</div>
  @include('layouts.galery')  
  @include('layouts.diagram')
</main>
@endsection