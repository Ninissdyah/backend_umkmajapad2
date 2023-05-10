@extends('layouts-admin.app')

@section('content')
<section class="home-section plus-bottom1">
    <div class="text">I STORE</div>
    <div class="coloumn-detail">
        <div class="form-group">
            <select name="category" class="form-select form-control @error('category') is-invalid @enderror" onChange="location = this.value;">
                <option value="/storeAdmin">Category</option>
                <option value="/storeAdmin/art">Art</option>
                <option value="/storeAdmin/beauty&health" >Beauty&Health</option>
                <option value="/storeAdmin/clothes">Clothes</option>
                <option value="/storeAdmin/electronic" >Electronic</option>
                <option value="/storeAdmin/food&drink">Food&Drink</option>
                <option value="/storeAdmin/furniture" selected>Furniture</option>
                <option value="/storeAdmin/other">Other</option>
            </select>
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror  
        </div>
    </div>
    <div>
        <table>
            <tr>
                <th class="no">No</th>
                <th>Store Name</th>
                <th>Latest Activity</th>
                <th class="action">Action</th>
            </tr>
            
            @if(!empty($data))
                @foreach ($data as $store)
            <tr>
                <td class="no">1</td>
                <td>{{$store->storeName}}</td>
                <td>{{$store->updated_at}}</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            @endif
        </table>
    </div>
</section>
@endsection