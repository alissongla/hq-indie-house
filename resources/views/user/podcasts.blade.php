@extends('user/app')

@section('main-content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3 style="text-align: center">Podcast</h3>
            @foreach ($podcasts as $podcast)
                <div class="row mb-5">
                    <div class="col-6">
                        <img src={{ asset(Storage::disk('public')->url($podcast->image)) }} alt="" width="100%">
                    </div>
                    <div class="col-6" style="vertical-align: middle">
                        <h2><a href="{{ route('user-podcasts-post', $podcast->slug)}}">{{ $podcast->title }}</a></h2>
                        <p>{{ $podcast->subtitle }}</p>
                        <p><span class="meta">Postado por {{ $podcast->author }}, {{ $podcast->created_at->diffForHumans()}}</p>
                    </div>

                </div>
            @endforeach

            <ul class="pager">
                {{ $podcasts->links() }}
            </ul>
        </div>
    </div>
</div>

@endsection
