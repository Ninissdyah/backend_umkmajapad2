@extends('layoutsUMKM.app')

@section('content')
<section class="home-section plus-bottom3">
    <div class="container">
        <div class="box-form height4">
            <div class="text-in center">Store Detail</div>
            <hr class="line-style">
            <div class="formsbox">
                <form action="{{ route('dashboard.update', $dashboard->id) }}" method="POST" enctype ="multipart/form-data">@method('PUT')
                {{ csrf_field() }}

                    <div class="form-group">
                        <input type="file" name="imagePath" class="@error('imagePath') is-invalid @enderror">
                        <img src="{{ asset('storage/dashboard/'.$dashboard->imagePath) }}" height="100px" alt="Image">
                        @error('imagePath')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label>Store Name</label>
                        <input type="text" class="form-control @error('storeName') is-invalid @enderror" name="storeName" value="{{$dashboard->storeName}}">
                        @error('storeName')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$dashboard->address}}">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="coloumn-detail">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-select form-control @error('category') is-invalid @enderror">
                            <option value="{{$dashboard->category}}" selected="selected">{{$dashboard->category}}</option>
                                <option value="Art">Art</option>
                                <option value="Beauty&Health">Beauty&Health</option>
                                <option value="Clothes">Clothes</option>
                                <option value="Electronic">Electronic</option>
                                <option value="Food&Drink">Food&Drink</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Others">Others</option>
                            </select>
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                    </div>
                    <div class="coloumn-detail">
                        <div class="form-group">
                            <label>WhatsApp</label>
                            <input type="text" class="form-control @error('wa') is-invalid @enderror" name="wa" value="{{$dashboard->wa}}">
                            @error('wa')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control @error('ig') is-invalid @enderror" name="ig" value="{{$dashboard->ig}}">
                            @error('ig')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                    </div>
                    <div class="coloumn-detail">
                        <div class="form-group">
                            <label>Shopee</label>
                            <input type="text" class="form-control @error('shopee') is-invalid @enderror" name="shopee" value="{{$dashboard->shopee}}">
                            @error('shopee')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                        <div class="form-group">
                            <label>Other</label>
                            <input type="text" class="form-control @error('others') is-invalid @enderror" name="others" value="{{$dashboard->others}}">
                            @error('others')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control @error('desc') is-invalid @enderror">{{$dashboard->desc}}</textarea>
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="button-content">
                        <button type="submit" class="btn-form btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection