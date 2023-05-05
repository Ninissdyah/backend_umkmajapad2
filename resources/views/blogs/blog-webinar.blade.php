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
        <a href="/electronic">Electronic</a>
        <a href="/blog">Food&drink</a>
        <a href="/furniture">Furniture</a>
        <a href="/webinar" class="active">Webinar</a>
    </div>
    <br><br><br>
    <div class="container-home">
        <div class="box-container">
            <div class="blog-card card">
                <div class="box-blog box">
                    <img class="image" src="https://www.pa4.com.br/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-24-at-16.20.03.jpeg">
                </div>
                <p class="title">Title</p>
                <hr>
                <p>Lorem ipsum dolor sit amet 
                    consectetur, adipisicing elit.</p>
                <div class="blog-readmore">
                    <a href="/blog-detail">Read More</a>
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>

            <div class="blog-card card">
                <div class="box-blog box">
                    <img class="image" src="https://bua.ub.ac.id/wp-content/uploads/2018/02/Banner-Pameran-Februari-6kali3-1024x512.jpg">
                </div>
                <p class="title">Title</p>
                <hr>
                <p>Lorem ipsum dolor sit amet 
                    consectetur, adipisicing elit.</p>
                <div class="blog-readmore">
                    <a href="/blog-detail">Read More</a>
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>

            <div class="blog-card card">
                <div class="box-blog box">
                    <img class="image "src="http://www.umm.ac.id/files/image/Bazar%20Buku.jpg">
                </div>
                <p class="title">Title</p>
                <hr>
                <p>Lorem ipsum dolor sit amet 
                    consectetur, adipisicing elit.</p>
                <div class="blog-readmore">
                    <a href="/blog-detail">Read More</a>
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div> 
    
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
                    <a href="/blog-detail">Read More</a>
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