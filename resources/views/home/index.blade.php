@extends('layouts.app')

@section('title', 'Mon super blog Wink 🔥')
@section('subTitle', 'Avec un thème de Start Bootstrap')
@section('img', 'theme/img/home-bg.jpg')

@section('content')
  <!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse ($articles as $article)
                <div class="post-preview">
                    <a href="{{ route('articles.show', $article->slug) }}">
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $article->excerpt }}
                        </h3>
                    </a>
                    <p class="post-meta">
                        Posté par
                        <a href="#">{{ $article->author->name }}</a>
                        le {{ $article->publish_date->format('d/m/Y') }}
                    </p>
                </div>
                @unless ($loop->last)
                    <hr>
                @endunless
            @empty
                <div>
                    Pas encore de posts 😱
                </div>
            @endforelse
        <!-- Pager -->
        <div class="clearfix">
            {!! $articles->links() !!}
        </div>
        </div>
    </div>
</div>
@endsection
