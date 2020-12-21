@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    @if(Storage::exists('public/news/'.$news->id.'.jpg'))
        <img src="{{ asset('storage/news/'.$news->id.'.jpg') }}" alt="" style="max-width: 400px; float:left; margin-right: 15px;">
    @endif 

    {!! $news->description !!}

    

</div>
@stop