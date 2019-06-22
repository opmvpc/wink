@extends('layouts.app')

@section('title', $article->title)
@section('subTitle', $article->excerpt)
@section('author', $article->author->name)
@section('date', $article->publish_date->format('d/m/Y'))
@section('img', asset($article->featured_image))

@section('content')
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto text-justify">
            {!! nl2br($article->body) !!}
        </div>
        </div>
    </div>
</article>
@endsection
