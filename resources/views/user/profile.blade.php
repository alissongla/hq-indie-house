@extends('user/app')

@section('main-content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3 style="text-align: center">Perfis</h3>
            @foreach ($profiles as $perfil)
                <div class="row mb-5">
                    <div class="col-3">
                        <img src={{ secure_asset(Storage::disk('public')->url($perfil->image)) }} alt="" width="100%">
                    </div>
                    <div class="col-9" style="vertical-align: middle">
                    <h2><a href="{{ route('user-profiles-post', $perfil->slug)}}">{{ $perfil->title }}</a></h2>
                    <p>{{$perfil->subtitle}}</p>
                    <p><span class="meta">Postado por {{ $perfil->author }}, {{ $perfil->created_at->diffForHumans()}}</p>
                    </div>

                </div>
            @endforeach

            <ul class="pager">
                {{ $profiles->links() }}
            </ul>
        </div>
    </div>
</div>

@endsection
