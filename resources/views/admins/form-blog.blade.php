@extends('layoutsUMKM.app')

@section('content')
<section class="home-section plus-bottom1">
    <div class="container">
        <div class="box-form height3">
            <div class="text-in center">Content</div>
            <hr class="line-style">
            <div class="formsbox">
                <form action="{{ route('blogAdmin.store') }}" method="POST" enctype ="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-group">
                        <input type="file" name="imagePath" class="@error('imagePath') is-invalid @enderror">
                        @error('imagePath')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label>Content Title</label>
                        <input type="text" class="form-control @error('contentTitle') is-invalid @enderror" name="contentTitle">
                        @error('contentTitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author">
                        @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="coloumn-detail">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-select form-control @error('category') is-invalid @enderror">
                            <option value="">Category</option>
                                <option value="Art">Art</option>
                                <option value="Beauty&Health">Beauty&Health</option>
                                <option value="Clothes">Clothes</option>
                                <option value="Electronic">Electronic</option>
                                <option value="Food&Drink">Food&Drink</option>
                                <option value="Webinar">Webinar</option>
                                <option value="Bazar">Bazar</option>
                            </select>
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror"></textarea>
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="button-content">
                        <button type="submit" class="btn-form btn">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection