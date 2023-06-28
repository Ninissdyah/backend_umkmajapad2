@extends('layouts.app')

@section('content')
<section class="store">
    <div class="tag">
        <!--Diisi sesuai kategorinya-->
        <p>{{$dashboards->category}}</p>
    </div>
    <div class="info-store">
        <div class="profile">
            <a class="example-image-link" href="{{asset('storage/dashboard/'. $dashboards->imagePath)}}"
                data-lightbox="example-2">
                    <img class="img img-profile example-image img-fluid mb-2"
                    src="{{asset('storage/dashboard/'. $dashboards->imagePath)}}" alt="image-1"></a>
        </div>
        <div class="profile-name">
            <p class="medium-bold">{{$dashboards->storeName}}</p>
            <div class="sosmed">
                <a href="#"><img class="img img-sosmed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" alt="iniGambar"> </a>
                <a href="#"><img class="img img-sosmed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/WhatsApp_icon.png/640px-WhatsApp_icon.png" alt="iniGambar"> </a>
                <a href="#"><img class="img img-sosmed" src="https://w7.pngwing.com/pngs/245/945/png-transparent-shopee-indonesia-online-shopping-android-receive-link-free-android-text-rectangle-orange-thumbnail.png" alt="iniGambar"> </a>
            </div>
            <div class="store-address">
                <i class="fas fa-map-marker-alt fa-xl"></i>
                <p>{{$dashboards->address}}</p>
            </div>
        </div>
    </div>
    <div class="desc-store">
        <p>{{$dashboards->desc}}</p>
        <hr>
    </div>
    <div class="product-store">
        <h2>PRODUCT</h2>
        <div class="box-container">
        @if(!empty($product))
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
            </div>
            @endforeach
        @else
            <div class="title-dashboard">
                <div class="alert alert-success alert-block">
                    <h3>Produk tidak tersedia</h3>
                </div>
            </div>
        @endif
        </div>
        <div class="container text-center">
            <div class="d-flex justify-content-center" >
                {{$product->links() }}
            </div>
        </div>
    </div>
</section>
@endsection