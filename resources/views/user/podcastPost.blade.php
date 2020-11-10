@extends('user/app')
@section('main-content')
<!-- Post Content -->
    <header class="masthead" style="background-image: url('{{ secure_asset(Storage::disk('public')->url($podcast->image)) }}')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1>{{ $podcast->title}}</h1>
                            <span class="meta">Postado por {{ $podcast->author }}, {{ $podcast->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
<!-- podcast Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! htmlspecialchars_decode($podcast->embed_link) !!}
                </div>
            </div>
        </div>
  </article>
@endsection()
