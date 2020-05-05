@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    @if(Storage::exists('public/products/'.$product->id.'.jpg'))
        <img src="{{ asset('storage/products/'.$product->id.'.jpg') }}" alt="" style="width: 200px">
    @endif
   

    {!! $product->description !!}

</div>
@stop