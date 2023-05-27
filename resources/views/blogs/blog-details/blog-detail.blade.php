@extends('layouts.app')

@section('content')
<section class="blog-detail">
    <h2>{{$blogs->contentTitle}}</h2>
    <div class="info-blog">
        <p>{{$blogs->created_at->toDateString()}}</p>
        <i class="bi-dash-lg"></i>
        <p>{{$blogs->author}}</p>
    </div>

    <div class="banner-blog">
        <a class="example-image-link" href="{{asset('storage/blogs/'. $blogs->imagePath)}}"
            data-lightbox="example-2" data-title="{{$blogs->contentTitle}}">
                <img class="img-blog example-image img-fluid mb-2"
                src="{{asset('storage/blogs/'. $blogs->imagePath)}}" alt="image-1">
        </a>
    </div>

    <div class="contain-blog">
        <p>{{$blogs->content}}</p>
        <!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of 
            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
            a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 
            "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. 
            This book is a treatise on the theory of ethics, very popular during the Renaissance. 
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of 
            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
            a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 
            "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. 
            This book is a treatise on the theory of ethics, very popular during the Renaissance. 
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of 
            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
            a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 
            "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. 
            This book is a treatise on the theory of ethics, very popular during the Renaissance. 
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p> -->
    </div>
    <a href="/{{$blogs->category}}"><button class="btn">{{$blogs->category}}</button></a>
</section>
@endsection