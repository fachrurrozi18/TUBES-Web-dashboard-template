@extends('layouts/main')

@section('style')
@if(isset($_GET["category"]))
@if($_GET['category'] === "competition")
<link rel="stylesheet" href="/css/competition_card.css">
<link rel="stylesheet" href="/css/slider.css">
@else
<link rel="stylesheet" href="/css/seminar-acara_card.css">
<link rel="stylesheet" href="/css/slider.css">
@endif
@endif
<!-- Navbar CSS -->
<!-- <link rel="stylesheet" href="/css/navbar.css"> -->

@section('container')

<!-- Uncomment this for rofi -->
{{-- @include('partials.competition_slider') --}}

<!-- Uncomment this for rozi -->
{{-- @include('partials.event_slider') --}}

<!-- Put The Slider Here -->

@include('slider')


<!-- Use the code below to create a loop to every posts  -->
@if ($posts->count())
@if(isset($_GET["category"]))
@if($_GET["category"] === "competition")
<div class="kotak">

    @foreach ($posts as $post)
    <div class="card">
        <div class="image">
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" />
        </div>
        <div class="container">
            <h2>{{ $post->title }}</h2>
            <i>Author: {{$post->author->name}}</i>
            <i class="fa fa-calendar" style="font-size: 18px"> {{$post->created_at->diffForHumans()}}</i>
            <br />
            <i class="fa fa-map-marker" style="font-size: 20px">
                <p> Universitas Pertamina </p>
            </i>
            <br/><br/>
            <div>
                    <a href="/posts/{{ $post->slug }}" class="button">Read more</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@elseif($_GET["category"] === "event")
<div class="kotak">

    @foreach ($posts as $post)
    <div class="card">
        <div class="ribbon">
            <img src="img/ribbon.png" alt="" />
            <div class="teks">
                <a href="">
                    <span>15</span> <br />
                    Jan 2023
                </a>
            </div>
        </div>
        <div class="image">
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" />
        </div>
        <div class="container">
            <h5> {{ $post->title }} </h5>
            <p>
                {{ $post->excerpt }}
            </p>
            <a href="/posts/{{ $post->slug }}" class="button">Read more</a>
        </div>
    </div>
    @endforeach
</div>

@else
<div class="kotak">

    @foreach ($posts as $post)
    <div class="card">
        <div class="ribbon">
            <img src="img/ribbon.png" alt="" />
            <div class="teks">
                <a href="">
                    <span>15</span> <br />
                    Jan 2023
                </a>
            </div>
        </div>
        <div class="image">
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" />
        </div>
        <div class="container">
            <h5> {{ $post->title }} </h5>
            <p>
                {{ $post->excerpt }}
            </p>
            <a href="/posts/{{ $post->slug }}" class="button">Read more</a>
        </div>
    </div>
    @endforeach
</div>
@endif
@endif
@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>

@endsection