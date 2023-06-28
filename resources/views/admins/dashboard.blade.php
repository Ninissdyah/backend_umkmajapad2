@extends('layouts-admin.app')

@section('content')
<section class="home-section plus-bottom3">
    <div class="text">DASHBOARD</div>
    <div class="grid-dash">
        <div class="grid grid-profile">
            <div class="text-in">PROFILE</div>
            <hr class="line-style">
            <div class="profile">
                <img class="img dash-profile img-profile" src="https://i.etsystatic.com/39180577/r/il/943566/4432680343/il_fullxfull.4432680343_9tjj.jpg" alt="ini-gambar">
            </div>
            <div class="content-profile">
                <p class="sub-title">Role</p>
                <div class="text-content">
                    <p>{{$users->name}}</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Email</p>
                <div class="text-content">
                    <p>{{$users->email}}</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Reset Your Password</p>
                    <div>
                        <a href="/password/reset/"><button type="button" class="btn-form btn">Reset Password</button></a>
                    </div>
            <br>
            </div>
        </div>
        <div class="grid grid-product">
            <div class="text-in">STORE</div>
            <hr class="line-style">
            <div class="content-profile content">
                <p>{{$jumlahProduk}}<span> Store</span></p>
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