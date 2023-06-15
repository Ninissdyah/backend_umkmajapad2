@extends('layoutsUMKM.app')

@section('content')
<section class="home-section plus-bottom1">
    <div class="text">BLOG</div>
    @if(!empty($blogs))
        @foreach($blogs as $blog)
        <div class="blog-container">
            <div class="left-flex">
                <p class="sub-title">{{$blog->contentTitle}}</p>
                <p class="content">{{$blog->created_at->toDateString()}}</p>
            </div>
            <div class="right-flex">
                <a href="/blog-details/{{$blog->id}}"><i class='bx bx-right-arrow-circle'></i></a>
                <div>
                    <form action= "{{ route('blogUMKM.destroy', $blog->id)}}" method="POST">@method('DELETE')
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$blog->id }}">
                        <button type="submit" onclick="return confirm('Are You Sure You Want To Remove This Content?');" style="margin-bottom:5rem;"><i class='bx bx-trash'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif

    <div class="button-content big">
        <a href="/blogUMKM/create"><i class='bx bx-plus-circle'></i></a>
    </div>
</section>
@endsection