@extends('user/app')
@section('main-content')
<!-- Post Content -->
    <header class="masthead" style="background-image: url('{{ secure_asset(Storage::disk('public')->url($review->image)) }}')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1>{{ $review->title}}</h1>
                            <span class="meta">Postado por {{ $review->author }}, {{ $review->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
<!-- Review Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! htmlspecialchars_decode($review->text) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <label for="ratingPost" class="control-label">Nota: </label>
                    <input id="ratingPost" name="ratingPost" class="rating-loading" value="{{ $review->rating }}" data-size="xl" disabled="">
                </div>
            </div>
        </div>
  </article>
@endsection()
