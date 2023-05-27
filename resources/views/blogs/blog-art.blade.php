@extends('layouts.app')

@section('content')
<section class="blog">
    <h2 class="center">BLOG</h2>
    <div class="cate-blog">
        <a href="/art" class="active">Art</a>
        <a href="/bazar">Bazar</a>
        <a href="/beauty">Beauty&Health</a>
        <a href="/clothes">Clothes</a>
    </div>
    <div class="cate-blog">
        <a href="/electronic">Electronic</a>
        <a href="/blog">Food&drink</a>
        <a href="/furniture">Furniture</a>
        <a href="/webinar">Webinar</a>
    </div>
    <br><br><br> 
    <div class="container-home blogs">
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
                    <a href="/art/{{$blog->id}}">Read More</a>
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
            @endforeach 
        @else
        </div>
            <div class="store-box3 widht-full">
                <div class="alert alert-block">
                    <h3>Content not available yet</h3>
                </div>
            </div>
        @endif
        </div>
        <div class="container text-center">
            <div class="d-flex justify-content-center" >
                {{ $blogs->links() }}
            </div>
        </div>
    </div> 
</section>
@endsection