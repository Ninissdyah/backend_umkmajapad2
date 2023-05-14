@extends('layouts.app')

@section('content')
<section class="store">
    <div class="tag">
        <!--Diisi sesuai kategorinya-->
        <p>{{$dashboards->category}}</p>
    </div>
    <div class="info-store">
        <div class="profile">
            <img class="img img-profile" src="{{asset('storage/dashboard/'. $dashboards->imagePath)}}" alt="ini-gambar">
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
            <div id="myBtn" class="store-card card">
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close"></span>
                        <img class="img-modal" src="{{ asset ('storage/product/'.$products->imagePath) }}" alt="iniGambar">
                    </div>
                </div>
                <div class="box-store box">
                    <img class="image" src="{{ asset ('storage/product/'.$products->imagePath) }}" alt="iniGambar">
                </div>
                <p class="title-product">{{$products->productName}}</p>
                <p class="harga-product"><b>Rp {{$products->productPrice}}</b></p>
                <p><b>{{$products->description}}</b></p>
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
</section>
@endsection