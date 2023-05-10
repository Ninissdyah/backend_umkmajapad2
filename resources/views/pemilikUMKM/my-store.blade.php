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
                @foreach($dashboard as $dashboards)
                <img class="img dash-profile img-profile" src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}" alt="ini-gambar">
                @endforeach
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
        @foreach($dashboard as $dashboards)
        <div class="grid grid-store">
        <div class="text-in">Store Detail</div>
            <hr class="line-style">
            <div class="content-profile">
                <p class="sub-title">Store Name</p>
                <div class="text-content">
                    <p>{{$dashboards->storeName}}</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Address</p>
                <div class="text-content">
                    <p>{{$dashboards->address}}</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Category</p>
                <div class="text-content">
                    <p>{{$dashboards->category}}</p>
                </div>
            </div>
            <div class="coloumn-detail">
                <div class="content-profile">
                    <p class="sub-title">WhatsApp</p>
                    <div class="text-content">
                        <p>{{$dashboards->wa}}</p>
                    </div>
                </div>
                <div class="content-profile">
                    <p class="sub-title">Instagram</p>
                    <div class="text-content">
                        <p>{{$dashboards->ig}}</p>
                    </div>
                </div>
            </div>
            <div class="coloumn-detail">
                <div class="content-profile">
                    <p class="sub-title">Shopee</p>
                    <div class="text-content">
                        <p>{{$dashboards->shopee}}</p>
                    </div>
                </div>
                <div class="content-profile">
                    <p class="sub-title">Other</p>
                    <div class="text-content">
                        <p>{{$dashboards->other}}</p>
                    </div>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Description</p>
                <div class="text-content height">
                    <p>{{$dashboards->desc}}</p>
                </div>
            </div>
            @endforeach
            @if(count($dashboard)==0)
            <div class="grid grid-image">
                <div class="profile">
                    <img class="img dash-profile img-profile" src="" alt="ini-gambar">
                </div>
                <div class="button-content">
                    <a href="/myStore/create"><i class='bx bx-pencil'></i></a>
                </div>
            </div>
            <div class="grid grid-store">
            <div class="text-in">Store Detail</div>
            <hr class="line-style">
            <div class="content-profile">
                <p class="sub-title">Store Name</p>
                <div class="text-content">
                    <p>StoreName</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Address</p>
                <div class="text-content">
                    <p>Address</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Category</p>
                <div class="text-content">
                    <p>Category</p>
                </div>
            </div>
            <div class="coloumn-detail">
                <div class="content-profile">
                    <p class="sub-title">WhatsApp</p>
                    <div class="text-content">
                        <p>Wa</p>
                    </div>
                </div>
                <div class="content-profile">
                    <p class="sub-title">Instagram</p>
                    <div class="text-content">
                        <p>Instagram</p>
                    </div>
                </div>
            </div>
            <div class="coloumn-detail">
                <div class="content-profile">
                    <p class="sub-title">Shopee</p>
                    <div class="text-content">
                        <p>Shopee</p>
                    </div>
                </div>
                <div class="content-profile">
                    <p class="sub-title">Other</p>
                    <div class="text-content">
                        <p>Other</p>
                    </div>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Description</p>
                <div class="text-content height">
                    <p>Description</p>
                </div>
            </div>
            @endif
            <div class="button-content">
                <a href="/myStore/create"><i class='bx bx-pencil'></i></a>
            </div>
        </div>
    </div>
</section>
@endsection