@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    @foreach ($partners as $partner)
      
        <h3>{{ $partner->name }}</h3>
      
        {!! $partner->description !!}
       

        @if(Storage::exists('public/partners/'.$partner->id.'.jpg'))
            <a href="{{ $partner->link }}" target="_blank">
                <img src="{{ asset('storage/partners/'.$partner->id.'.jpg') }}" alt="" style="width: 200px">
            </a>
        @endif 
    @endforeach


    

</div>
@stop