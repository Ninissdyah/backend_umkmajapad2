@extends('layoutsUMKM.app')

@section('content')
<section class="home-section">
    <div class="text">I PRODUCT</div>
    <div class="box-container">
    @if(!empty($product))
        @foreach($product as $pro)
        <div class="store-card card">
            <div class="box-store box">
                <img class="image" src="{{ asset ('storage/product/'.$pro->imagePath) }}" alt="iniGambar">
            </div>
            <p class="title-product">{{$pro->productName}}</p>
            <p class="harga-product"><b>Rp {{$pro->productPrice}}</b></p>
            <p class="desc-product"><b>{{$pro->description}}</b></p>
            <div class="button-content">
                <form action= "{{ route('product.destroy', $pro->id)}}" method="POST">@method('DELETE')
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$pro->id }}"> <br></br>
                    <button type="submit" onclick="return confirm('Are You Sure You Want To Remove This Product?');"><i class='bx bx-trash'></i></button>
                </form>
            </div>
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
    <div class="button-content big">
        <a href="/product/create"><i class='bx bx-plus-circle'></i></a>
    </div>
</section>
@endsection