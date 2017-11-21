@extends('nms-class.layouts.master')
@section('content')
    @foreach($news as $singleNews)
    <h2>
        <a href="#">{{ $singleNews->title }}</a>
    </h2>
    <p><span class="glyphicon glyphicon-time"></span>
        {{--Posted on August 28, 2013 at 10:00 PM--}}
        {{ date('F d, Y', strtotime($singleNews->created_at)) }}
        at
        {{ date('h:i A', strtotime($singleNews->created_at)) }}
    </p>
    <hr>
    <img class="img-responsive" src="{{ url("/uploads/images/$singleNews->image") }}" alt="">
    <hr>
    <p>{{ $singleNews->summary }}</p>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>
    @endforeach
    {{ $news->links() }}
@endsection