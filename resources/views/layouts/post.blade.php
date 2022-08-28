@foreach ($post as $data)
    
<div class="col-8 mt-5 ms-lg-5" id="posting" style="background-color: white">
    <div class="row">
        <div class="fs-1 ms-lg-5 mt-4 me-3 fw-bolder text-sm-start text-wrap text-break">
            <p style="'Trebuchet MS', sans-serif;" id="teks">{{ $data->title }}</p>
        </div>
       
        <div class="col-12 gap-lg-5 ms-lg-5 fw-lighter"  id="iconi">
            <i class="bi bi-clock pe-lg-3">  {{ $data->published_at }}</i>
            <i class="bi bi-person pe-lg-3"> admin</i>
            <i class="bi bi-eye pe-lg-3">{{ $data->reads }}  View</i>
            <i class="bi bi-chat-dots pe-lg-3">  {{ $countcomment }} comment</i>
        </div>
        <div class="col-12 gap-lg-5 ms-lg-5  ms-3 mt-3">
            <img src={{ url("storage/$data->image")}} class="img-fluid col-11 " alt="">
        </div>
        <div class="col mt-lg-5 ms-lg-5 me-lg-5 fs-5 pb-5" id="artikels">
            <p class="break-word" style="word-break:initial">{{ $data->body }}</p>
        </div>
    </div>
</div>
@php
    $data->reads++;
    return $data->save();
@endphp
@endforeach