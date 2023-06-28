@extends('layoutsUMKM.app')

@section('content')
<section class="home-section plus-bottom3">
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
    <div class="text">PRODUCT</div>
    <div class="box-container">
    @if(!empty($product))
        @foreach($product as $pro)
        <div class="store-card card">
            <div class="box-store box">
                    <a class="example-image-link" href="{{ asset ('storage/product/'.$pro->imagePath) }}"
                        data-lightbox="example-2" data-title="{{$pro->description}}">
                            <img class="image example-image img-fluid mb-2"
                            src="{{ asset ('storage/product/'.$pro->imagePath) }}" alt="image-1"></a>
                </div>
            <p class="title-product">{{$pro->productName}}</p>
            <p class="harga-product"><b>Rp {{$pro->productPrice}}</b></p>
            <div class="button-content2">
                <form action= "{{ route('product.destroy', $pro->id)}}" method="POST">@method('DELETE')
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$pro->id }}">
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
    <div class="container text-center">
                    <div class="d-flex justify-content-center" >
                        {{ $product->links() }}
                    </div>
                </div>
    <div class="button-content big">
        <a href="/product/create"><i class='bx bx-plus-circle'></i></a>
    </div>
</section>
@endsection