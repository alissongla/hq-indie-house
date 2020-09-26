@extends('user/app')
@section('bg-img', asset('user/img/post-bg.jpg'))
@section('title', 'Man must explore, and this is exploration at its greatest')
@section('sub-heading', 'Problems look mighty small from 150 miles up')
@section('main-content')
<!-- Post Content -->
    <header class="masthead" style="background-image: url('{{ asset(Storage::disk('public')->url($interview->image)) }}')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1>{{ $interview->title}}</h1>
                            <span class="meta">Postado por {{ $interview->author }}, {{ $interview->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
<!-- Interview Content -->
    <article>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! htmlspecialchars_decode($interview->text) !!}
            </div>
        </div>
        </div>
  </article>
@endsection()
