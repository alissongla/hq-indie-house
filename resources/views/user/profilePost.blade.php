@extends('user/app')
@section('main-content')
<!-- Post Content -->
    <header class="masthead" style="background-image: url('{{ secure_asset(Storage::disk('public')->url($profile->image)) }}')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1>{{ $profile->title}}</h1>
                            <span class="meta">Postado por {{ $profile->author }}, {{ $profile->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
<!-- profile Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! htmlspecialchars_decode($profile->embed_link) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! htmlspecialchars_decode($profile->text) !!}
                </div>
            </div>
        </div>
  </article>
@endsection()
