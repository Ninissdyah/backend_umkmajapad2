@extends('layouts-admin.app')

@section('content')
<section class="home-section plus-bottom3">
@if ($message = Session::get('berhasil'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
    <div class="coloumn-detail">
    <div class="text storez">STORE</div>
        <div class="form-group form-group2">
            <select name="category" class="form-select form-control @error('category') is-invalid @enderror" onChange="location=this.value">
                <option value="/storeAdmin">Category</option>
                <option value="/storeAdmin/art">Art</option>
                <option value="/storeAdmin/beauty&health">Beauty&Health</option>
                <option value="/storeAdmin/clothes">Clothes</option>
                <option value="/storeAdmin/electronic" >Electronic</option>
                <option value="/storeAdmin/food&drink" selected>Food&Drink</option>
                <option value="/storeAdmin/furniture">Furniture</option>
                <option value="/storeAdmin/other">Other</option>
            </select>
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror  
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
            @endif
        </div>
    </div>
    <div>
    @if(count($data)>0)
        <table>
            <tr>
                <th class="no">No</th>
                <th>Store Name</th>
                <th>Latest Activity</th>
                <th class="action">Action</th>
            </tr>
            

                @foreach ($data as $store)
            <tr>
                <td class="no">{{$loop->iteration}}</td>
                <td>{{$store->storeName}}</td>
                <td>{{$store->last_login_at}}</td>
                <td class="action">
                    <div class="action-flex">
                        <div class="button-content2">
                            <form action= "{{ route('storeAdmin.destroy', $store->vendorId)}}" method="POST">@method('DELETE')
                                {{ csrf_field() }}
                                <input type="hidden" name="vendorId" value="{{$store->vendorId}}">
                                <button type="submit" onclick="return confirm('Are You Sure You Want To Remove This User?');"><i class='bx bx-trash'></i></button>
                            </form>
                        </div>
                        <a href="/food-store/{{$store->id}}"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <div class="store-box3 widht-full">
                <div class="alert alert-block">
                    <h3>Store not available yet</h3>
                </div>
            </div>
            @endif
        </table>
    </div>
    <br>
    <div class="container text-center">
        <div class="d-flex justify-content-center" >
            {{ $data->links() }}
        </div>
    </div>
</section>
@endsection