@extends('site')
@section('content')

    <div class="container">

        <h1 class="title-page"> {{ $seo['title'] }} </h1>

        @foreach ($partners as $partner)
            <div class="partner-item">
                <h3>{{ $partner->name }}</h3>


                @if(Storage::exists('public/partners/'.$partner->id.'.jpg'))
                    <a href="{{ $partner->link }}" target="_blank">
                        <img src="{{ asset('storage/partners/'.$partner->id.'.jpg') }}" alt="" >
                    </a>
                @endif

                {!! $partner->description !!}

            </div>
        @endforeach


    </div>
@stop