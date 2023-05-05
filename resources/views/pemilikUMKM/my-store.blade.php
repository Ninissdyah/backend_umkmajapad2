@extends('layoutsUMKM.app')

@section('content')
<section class="home-section plus-bottom2">
    @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
    @if ($message = Session::get('berhasil'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
    @if ($message = Session::get('login'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
    <div class="text">I MY STORE</div>
    <div class="grid-dash">
        <div class="grid grid-image">
            <div class="profile">
                <img class="img dash-profile img-profile" src="{{ asset ('storage/dashboard/'.$dashboard->imagePath) }}" alt="ini-gambar">
            </div>
            <div class="button-content">
                <a href="/myStore/create"><i class='bx bx-pencil'></i></a>
            </div>
        </div>
        @foreach($users as $user)
        <div class="grid grid-account">
            <div class="text-in">Account Detail</div>
            <hr class="line-style">
            <div class="content-profile">
                <p class="sub-title">Email</p>
                <div class="text-content">
                    <p>{{$user->email}}</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Password</p>
                <div class="text-content">
                    <p>{{$user->password}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="grid grid-store">
        <div class="text-in">Store Detail</div>
            <hr class="line-style">
            <div class="content-profile">
                <p class="sub-title">Store Name</p>
                <div class="text-content">
                    <p>{{$dashboard->storeName}}</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Address</p>
                <div class="text-content">
                    <p>{{$dashboard->address}}</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Category</p>
                <div class="text-content">
                    <p>{{$dashboard->category}}</p>
                </div>
            </div>
            <div class="coloumn-detail">
                <div class="content-profile">
                    <p class="sub-title">WhatsApp</p>
                    <div class="text-content">
                        <p>{{$dashboard->wa}}</p>
                    </div>
                </div>
                <div class="content-profile">
                    <p class="sub-title">Instagram</p>
                    <div class="text-content">
                        <p>{{$dashboard->ig}}</p>
                    </div>
                </div>
            </div>
            <div class="coloumn-detail">
                <div class="content-profile">
                    <p class="sub-title">Shopee</p>
                    <div class="text-content">
                        <p>{{$dashboard->shopee}}</p>
                    </div>
                </div>
                <div class="content-profile">
                    <p class="sub-title">Other</p>
                    <div class="text-content">
                        <p>{{$dashboard->other}}</p>
                    </div>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Description</p>
                <div class="text-content height">
                    <p>{{$dashboard->desc}}</p>
                </div>
            </div>
            <div class="button-content">
                <a href="/myStore/create"><i class='bx bx-pencil'></i></a>
            </div>
        </div>
    </div>
</section>
@endsection