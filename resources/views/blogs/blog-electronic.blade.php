@extends('layouts.app')

@section('content')
<section class="blog">
    <h2 class="center">BLOG</h2>
    <div class="cate-blog">
        <a href="/art">Art</a>
        <a href="/bazar">Bazar</a>
        <a href="/beauty">Beauty&Health</a>
        <a href="/clothes">Clothes</a>
    </div>
    <div class="cate-blog">
        <a href="/electronic" class="active">Electronic</a>
        <a href="/blog">Food&drink</a>
        <a href="/furniture">Furniture</a>
        <a href="/webinar">Webinar</a>
    </div>
    <br><br><br>
    <div class="container-home">
        <div class="box-container">
        @if(count($blogs)>0)
            @foreach($blogs as $blog) 
            <div class="blog-card card">
                <div class="box-blog box">
                    <img class="image" src="{{ asset ('storage/blogs/'.$blog->imagePath) }}">
                </div>
                <p class="title">{{$blog->contentTitle}}</p>
                <hr>
                <p>Lorem ipsum dolor sit amet 
                    consectetur, adipisicing elit.</p>
                <div class="blog-readmore">
                    <a href="/electronic/{{$blog->id}}">Read More</a>
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
            @endforeach 
        @else
            <div class="store-box2">
                <div class="alert alert-success alert-block">
                    <h3>Artikel tidak tersedia</h3>
                </div>
            </div>
        @endif
        </div>
    </div> 
</section>
@endsection