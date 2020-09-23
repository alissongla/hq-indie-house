@extends('user/app')

@section('main-content')
<div class="container mt-5">
    <div class="row">
        <div class="col-9">
            <h3 style="text-align: center">Últimas Notícias</h3>
            @foreach ($news as $noticia)
                <div class="row mb-5">
                    <div class="col-6">
                        <img src={{ asset('uploads/img/Bitter-root.jpg') }} alt="" width="100%">
                    </div>
                    <div class="col-6" style="vertical-align: middle">
                    <h2><a href="{{ route('post', $noticia->slug)}}">{{ $noticia->title }}</a></h2>
                    <p><span class="meta">Postado por {{ $noticia->author }} as {{ $noticia->created_at->diffForHumans()}}</p>
                    </div>

                </div>
            @endforeach

            <ul class="pager">
                {{ $news->links() }}
            <a href="{{ route('ultimas-noticias') }}">Ver mais</a>
            </ul>
        </div>
        <div class="col">
            <iframe src="https://open.spotify.com/embed/playlist/0Ntxi04q5LMVpWV5Ljo1Dh" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>

    </div>
</div>

@endsection
