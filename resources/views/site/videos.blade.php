@extends('site')
@section('content')

    <div class="container">

        <h1 class="title-page"> {{ $seo['title'] }} </h1>

        @foreach ($videos as $video)
            <div class="partner-item">
                <h3>{{ $video->name }}</h3>

                {!! $video->player !!}

            </div>
        @endforeach


    </div>
@stop