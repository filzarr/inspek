<div class="mt-5 pt-3  pb-3 shadow-lg   h-auto col-5 " style="background-color: #ffffff" id="mid">
    <div class="container justify-content-center mb-5" style="background-color: rgba(196, 196, 196, 0.17);"
        id="blog">
        <h2>Berita Terkini</h2>
    </div>
    <div class=" " id="car">
        @foreach ($posts as $post)
            <div class="card mx-3 mb-3 border-0 " class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="storage/{{ $post->image }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/post/{{ $post->id }}"
                                    style="text-decoration: none;color: #000000 !important">{{ $post->title }}</a></h5>
                            <div class="col">
                                <p class="card-text" style="border-top: 2px solid #0b0b0b">{!! Str::limit(strip_tags($post->body), 50) !!} </p>
                            </div>
                           
                            <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($post->published_at)->format('d-m-Y')}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}

    </div>
</div>
