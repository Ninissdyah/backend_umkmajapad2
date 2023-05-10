@extends('layoutsUMKM.app')

@section('content')

<section class="home-section plus-bottom1">
    <div class="text">I DASHBOARD</div>
    <div class="grid-dash">
        <div class="grid grid-profile">
            <div class="text-in">PROFILE</div>
            <hr class="line-style">
            <div class="profile">
                <img class="img dash-profile img-profile" src="https://i.etsystatic.com/39180577/r/il/943566/4432680343/il_fullxfull.4432680343_9tjj.jpg" alt="ini-gambar">
            </div>
            @foreach($dashboard as $dashboards)
            <div class="content-profile">
                <p class="sub-title">Store Name</p>
                <div class="text-content">
                    <p>{{ $dashboards->storeName }}</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Category</p>
                <div class="text-content">
                    <p>{{$dashboards->category}}</p>
                </div>
            </div>
            @endforeach
            @if(count($dashboard)==0)
            <div class="content-profile">
                <p class="sub-title">Store Name</p>
                <div class="text-content">
                    <p>Store Name</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Category</p>
                <div class="text-content">
                    <p>Category</p>
                </div>
            </div>
            @endif

            <div class="button-content">
                <a href="/myStore"><i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </div>
        <div class="grid grid-product">
            <div class="text-in">PRODUCT</div>
            <hr class="line-style">
            <div class="content-profile content">
                <p>{{$jumlahProduk}}<span> Product</span></p>
            </div>
        </div>
        <div class="grid grid-blog">
            <div class="text-in">BLOG</div>
            <hr class="line-style">
            <div class="content-profile content">
                <p>{{$jumlahBlog}}<span> Content</span></p>
            </div>
        </div>
    </div>
</section>
@endsection