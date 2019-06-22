@extends('layouts.app')

@section('title', 'À Propos 🖋')
@section('subTitle', 'Ha oauis faut raconter des trucs? 😅')
@section('img', 'theme/img/about-bg.jpg')

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto text-justify">
        {!! nl2br($page->body) !!}
        </div>
    </div>
    </div>
@endsection
