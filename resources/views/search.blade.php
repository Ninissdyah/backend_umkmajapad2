@extends('layouts.app')

@section('content')
<section class="blog">
    <h2 class="center">Search Result</h2>
    <div class="container-home blogs">
        <div class="box-container">
        @if(count($blogs))  
        </div>
            <div class="store-box3 widht-full">
                <div class="alert alert-block">
                    <h3>Ditemukan <strong>{{count($blogs)}}</strong> 
                        data dengan kata: <strong>{{ $cari }}</strong></h3>
                </div>
            </div>
        </div>
        <br>
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
        @elseif(count($store))  
        </div>
            <div class="store-box3 widht-full">
                <div class="alert alert-block">
                    <h3>Ditemukan <strong>{{count($store)}}</strong> 
                        data dengan kata: <strong>{{ $cari }}</strong></h3>
                </div>
            </div>
        </div>
        <br>
        @foreach($store as $dashboards)
                    <a href="/art-store/{{$dashboards->id}}">
                    <div class="store-card card">
                        <div class="box-store box">
                            <img class="image" src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}">
                        </div>
                        <p class="title">{{$dashboards->storeName}}</p>
                        <p>{{substr($dashboards->desc,0,50)}}</p>
                    </div></a>
        @endforeach
        @elseif(count($product))  
        </div>
            <div class="store-box3 widht-full">
                <div class="alert alert-block">
                    <h3>Ditemukan <strong>{{count($product)}}</strong> 
                        data dengan kata: <strong>{{ $cari }}</strong></h3>
                </div>
            </div>
        </div>
        <br>
        <div class="product-store">
        <h2>PRODUCT</h2>
        <div class="box-container">
            @foreach($product as $products)
            <div class="store-card card">
                <div class="box-store box">
                    <a class="example-image-link" href="{{ asset ('storage/product/'.$products->imagePath) }}"
                        data-lightbox="example-2" data-title="{{$products->description}}">
                            <img class="image example-image img-fluid mb-2"
                            src="{{ asset ('storage/product/'.$products->imagePath) }}" alt="image-1"></a> 
                </div>
                <p class="title-product">{{$products->productName}}</p>
                <p class="harga-product"><b>Rp {{$products->productPrice}}</b></p>
                <p><b>{{$products->description}}</b></p>
            </div>
            @endforeach
        @else
        </div>
            <div class="store-box3 widht-full">
                <div class="alert alert-block">
                    <h3>Data {{ $cari }} tidak ditemukan</h3>
                </div>
            </div>
        @endif 
        </div>
        <div class="container text-center">
            <div class="d-flex justify-content-center" >
                {{ $store->links() }}
            </div>
        </div>
    </div> 
</section>
@endsection