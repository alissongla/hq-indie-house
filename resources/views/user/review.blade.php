@extends('user/app')

@section('main-content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3 style="text-align: center">Últimas Critícas</h3>
            @foreach ($reviews as $critica)
                <div class="row mb-5">
                    <div class="col-3">
                        <img src={{ secure_asset(Storage::disk('public')->url($critica->image)) }} alt="" width="100%">
                    </div>
                    <div class="col-9" style="vertical-align: middle">
                    <h2><a href="{{ route('review-post', $critica->slug)}}">{{ $critica->title }}</a></h2>
                    <p>{{$critica->subtitle}}</p>
                    <p><span class="meta">Postado por {{ $critica->author }}, {{ $critica->created_at->diffForHumans()}}</p>
                    </div>

                </div>
            @endforeach

            <ul class="pager">
                {{ $reviews->links() }}
            </ul>
        </div>
    </div>
</div>

@endsection
