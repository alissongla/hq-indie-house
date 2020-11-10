@extends('user/app')

@section('main-content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3 style="text-align: center">Notícias</h3>
            @foreach ($news as $noticia)
                <div class="row mb-5">
                    <div class="col-6">
                        <img src={{ secure_asset(Storage::disk('public')->url($noticia->image)) }} alt="" width="100%">
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
