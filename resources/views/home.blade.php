
@extends('layouts.main')

@section('container')
<main>
  <div class="row gap-5" id="semua">
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