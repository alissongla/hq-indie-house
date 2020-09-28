@extends('user/app')
@section('bg-img', secure_asset('user/img/post-bg.jpg'))
@section('title', 'Man must explore, and this is exploration at its greatest')
@section('sub-heading', 'Problems look mighty small from 150 miles up')
@section('main-content')
<!-- Post Content -->
    <header class="masthead" style="background-image: url('{{ secure_asset(Storage::disk('public')->url($post->image)) }}')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1>{{ $post->title}}</h1>
                            <span class="meta">Postado por {{ $post->author }} as {{ $post->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
<!-- Post Content -->
    <article>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! htmlspecialchars_decode($post->text) !!}
            </div>
        </div>
        </div>
  </article>
@endsection()
