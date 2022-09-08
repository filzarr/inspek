@foreach ($pdf as $data)
<div class="col-8 mt-5 ms-lg-5 shadow-lg " id="posting" style="background-color: white">
    <div class="row">
        <div class="fs-1 ms-lg-5 mt-4 me-3 fw-bolder text-sm-start text-wrap text-break">
            <p style="'Trebuchet MS', sans-serif;" id="teks">{{ $data->title }}</p>
        </div>

        <div class="col-12 gap-lg-5 ms-lg-5 fw-lighter" id="iconi">
            <i class="bi bi-clock pe-lg-3">&nbsp;&nbsp;{{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y')}}</i>
            <i class="bi bi-person pe-lg-3"> admin</i>
            <i class="bi bi-eye pe-lg-3">0 View</i>
            <i class="bi bi-chat-dots pe-lg-3">{{ $countcomment }} comment</i>
        </div>
        
        <div class="col mt-lg-5 ms-lg-5 me-lg-5 fs-5 pb-5" id="artikels">
            <div class="container ms-lg-0 ms-3">
                <p class="break-word" style="word-break:initial">{!! $data->body !!}</p>
            </div>
        </div>

        <iframe  id="pdf"  src="{{ url("storage/$data->file") }}" alt="pdf" ></iframe>
        <div class="mb-5 ms-lg-5 ms-3"><a href="/download/{{ $data->id }}"><button class="btn btn-primary btn-lg">Download</button></a></div>




    </div>
</div>
@endforeach