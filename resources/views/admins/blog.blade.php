@extends('layouts-admin.app')

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
    <div class="text admin">BLOG</div>
    @if(!empty($blogs))
        @foreach($blogs as $blog)
        <div class="blog-container">
            <div class="left-flex">
                <p class="sub-title">{{$blog->contentTitle}}</p>
                <p class="content">{{$blog->created_at->toDateString()}}</p>
            </div>
            <div class="right-flex">
                <a href="/blog-details/{{$blog->id}}"><i class='bx bx-right-arrow-circle'></i></a>
                <form action= "{{ route('blogAdmin.destroy', $blog->id)}}" method="POST">@method('DELETE')
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$blog->id }}">
                    <button type="submit" onclick="return confirm('Are You Sure You Want To Remove This Content?');" style="margin-bottom:5rem;"><i class='bx bx-trash'></i></button>
                </form>
            </div>
        </div>
        @endforeach
    @endif
    <!-- <div class="blog-container">
        <div class="left-flex">
            <p class="sub-title">Title Articel</p>
            <p class="content">March, 10 2023</p>
        </div>
        <div class="right-flex">
            <a href="#"><i class='bx bx-trash'></i></a>
            <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
        </div>
    </div>
    <div class="blog-container">
        <div class="left-flex">
            <p class="sub-title">Title Articel</p>
            <p class="content">March, 10 2023</p>
        </div>
        <div class="right-flex">
            <a href="#"><i class='bx bx-trash'></i></a>
            <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
        </div>
    </div>
    <div class="blog-container">
        <div class="left-flex">
            <p class="sub-title">Title Articel</p>
            <p class="content">March, 10 2023</p>
        </div>
        <div class="right-flex">
            <a href="#"><i class='bx bx-trash'></i></a>
            <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
        </div>
    </div>
    <div class="blog-container">
        <div class="left-flex">
            <p class="sub-title">Title Articel</p>
            <p class="content">March, 10 2023</p>
        </div>
        <div class="right-flex">
            <a href="#"><i class='bx bx-trash'></i></a>
            <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
        </div>
    </div>
    <div class="blog-container">
        <div class="left-flex">
            <p class="sub-title">Title Articel</p>
            <p class="content">March, 10 2023</p>
        </div>
        <div class="right-flex">
            <a href="#"><i class='bx bx-trash'></i></a>
            <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
        </div>
    </div>
    <div class="blog-container">
        <div class="left-flex">
            <p class="sub-title">Title Articel</p>
            <p class="content">March, 10 2023</p>
        </div>
        <div class="right-flex">
            <a href="#"><i class='bx bx-trash'></i></a>
            <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
        </div>
    </div> -->
    <div class="container text-center">
        <div class="d-flex justify-content-center" >
            {{ $blogs->links() }}
        </div>
    </div>
    <div class="button-content big">
        <a href="/blogAdmin/create"><i class='bx bx-plus-circle'></i></a>
    </div>
</section>
@endsection