<div class="row mt-5 pt-3  pb-3   h-auto col-xl-5 col-xs-12" style="background-color: #ffffff" id="mid">
    <div class="container justify-content-center " style="background-color: rgba(196, 196, 196, 0.17);"
        id="blog">
        <h2>Berita Terkini</h2>
    </div>
    <div class="grid gap-4 " id="car">
        @foreach ($posts as $post)
            <div class="card mx-3 mb-3 border-0 " class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="storage/{{ $post->image }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/post/{{ $post->id }}"
                                    style="text-decoration: none;color: #000000 !important">{{ $post->title }}</a></h5>
                            <p class="card-text" style="border-top: 2px solid #0b0b0b">{{ Str::limit($post->body, 50) }}
                            </p>
                            <p class="card-text"><small class="text-muted">{{ $post->created_at }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}

    </div>
</div>
