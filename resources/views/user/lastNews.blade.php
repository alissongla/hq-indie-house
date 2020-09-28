@extends('user/app')

@section('main-content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3 style="text-align: center">Notícias</h3>
            @foreach ($news as $noticia)
                <div class="row mb-5">
                    <div class="col-6">
<<<<<<< HEAD
                        <img src={{ asset(Storage::disk('public')->url($noticia->image)) }} alt="" width="100%">
=======
                        <img src={{ secure_asset('img/bitter.jpg') }} alt="" width="100%">
>>>>>>> 2c81c7429babd8e3ec03e8e3d4be802084dd42be
                    </div>
                    <div class="col-6" style="vertical-align: middle">
                    <h2><a href="{{ route('post', $noticia->slug)}}">{{ $noticia->title }}</a></h2>
                    <p><span class="meta">Postado por {{ $noticia->author }}, {{ $noticia->created_at->diffForHumans()}}</p>
                    </div>

                </div>
            @endforeach

            <ul class="pager">
                {{ $news->links() }}
            </ul>
        </div>
    </div>
</div>

@endsection
