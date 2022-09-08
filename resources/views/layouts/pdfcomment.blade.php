<div class="container mt-5 shadow-lg" style="background-color: white">
    <div class="be-comment-block">
        <h1 class="comments-title">Comments {{ $countcomment }}</h1>
        @foreach ($comment as $item)
            
        <div class="be-comment">
            <div class="be-img-comment">
                <a href="">
                    <img src={{ url('img/blank.png') }} alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content col-10">

                <span class="be-comment-name">
                    <a href="">{{ $item->name }}</a>
                </span>
                <span class="be-comment-time">
                    <i class="fa fa-clock-o"></i>
                    {{ $item->created_at }}
                </span>

                <p class="be-comment-text col-xl-10 w-full">
                   {{ $item->body }}
                </p>
            </div>
        </div>
        @endforeach
        

        <form class="form-block" method="post" action="{{ route('submitpdfcomment') }}">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group fl_icon">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <input class="form-input" type="text" placeholder="name" name="name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 fl_icon">
                    <div class="form-group fl_icon">
                        <div class="icon"><i class="fa fa-envelope-o"></i></div>
                        <input class="form-input" type="text" placeholder="email" name="email">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <textarea class="form-input" required="" placeholder="body" name="body"></textarea>
                    </div>
                </div>
                @foreach ($pdf as $item)
                    <input type="hidden" value="{{ $item->id }}" name="submenu_id">
                @endforeach
                <button type="submit" class="btn btn-primary pull-right">submit</button>
            </div>
        </form>
    </div>
</div>