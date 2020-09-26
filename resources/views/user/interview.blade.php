@extends('user/app')

@section('main-content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3 style="text-align: center">Últimas Entrevistas</h3>
            @foreach ($interviews as $entrevista)
                <div class="row mb-5">
                    <div class="col-6">
                        <img src={{ asset(Storage::disk('public')->url($entrevista->image)) }} alt="" width="100%">
                    </div>
                    <div class="col-6" style="vertical-align: middle">
                    <h2><a href="{{ route('user-interviews-post', $entrevista->slug)}}">{{ $entrevista->title }}</a></h2>
                    <p>{{ $entrevista->subtitle }}</p>
                    <p><span class="meta">Postado por {{ $entrevista->author }}, {{ $entrevista->created_at->diffForHumans()}}</p>
                    </div>

                </div>
            @endforeach

            <ul class="pager">
                {{ $interviews->links() }}
            </ul>
        </div>
    </div>
</div>

@endsection
