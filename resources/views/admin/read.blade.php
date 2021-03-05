@extends('admin.index')
@section('dashboard.content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Book</li>
            </ol>
        </div>
        
    </div>
    
    <div class="col-md-12">
        <h3><strong>{{$book->book_name}}</strong></h3>
        <h5><i>By {{$book->author_name}}</i></h5>
        <h6>Publication : {{$book->publication}}</h6>
        <h6>Category : {{$book->category->category}}</h6>
        <h6>Resource Type : {{$book->resource_type}}</h6>
        <br>
        @if($book->available_in_library)
            <h5 style="text-decoration: underline;">Library Location</h5>
            <h6>Location : {{$book->location}}</h6>
            <h6>Reference No : {{$book->reference_no}}</h6>
        @endif
        <hr>
        <p>
            {!! $book->description !!}
        </p> 
        @if($book->resource_type=='poadcast' || $book->resource_type=='mp3')
            <audio controls>
                <source src='{{Storage::url("$book->resource")}}' type="audio/mpeg">
            </audio>
        @endif
        @if($book->resource_type=='video')
            <video width="320" height="240" controls>
                <source src='{{Storage::url("$book->resource")}}' type="video/mp4">
            </video>
        @endif
        @if($book->resource_type=='pdf')
            <iframe id="fred" style="border:1px solid #666CCC" title="PDF in an i-Frame" src='{{Storage::url("$book->resource")}}' frameborder="1" scrolling="auto" height="1100" width="850" ></iframe>
        @endif
        @if($book->resource_type=='url')
            <iframe id="fred" style="border:1px solid #666CCC" title="PDF in an i-Frame" src='{{$book->resource}}' frameborder="1" scrolling="auto" height="1100" width="850" ></iframe>
        @endif

    </div>
    
@endsection