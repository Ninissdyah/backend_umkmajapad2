@extends('layouts.app')

@section('content')
<section class="store-page">
    <h2 class="center">STORE</h2>
    <div class="tag display-flex">
        <p>Furniture</p>
    </div>
    <div class="store-box">
    <div class="store-sidebar">
            <a href="/art-store">
            <div class="store-cat">
                <p>Art</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/beauty-store">
            <div class="store-cat">
                <p>Beauty&Health</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/clothes-store">
            <div class="store-cat">
                <p>Clothes</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/electronic-store">
            <div class="store-cat">
                <p>Electronic</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/stores">
            <div class="store-cat">
                <p>Food&Drink</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/furniture-store" class="active">
            <div class="store-cat">
                <p>Furniture</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/other">
            <div class="store-cat">
                <p>Others</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
        </div>
        @if(count($dashboard)>0)
            @foreach($dashboard as $dashboards)
            <div class="store-box2">
                <div class="box-container">
                    <a href="/furniture-store/{{$dashboards->id}}">
                    <div class="store-card card">
                        <div class="box-store box">
                            <img class="image" src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}">
                        </div>
                        <p class="title">{{$dashboards->storeName}}</p>
                        <p>{{$dashboards->desc}}</p>
                    </div></a>
                </div>
            </div> 
            @endforeach 
        @else
            <div class="store-box2">
                <div class="alert alert-success alert-block">
                    <h3>Toko tidak tersedia</h3>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection