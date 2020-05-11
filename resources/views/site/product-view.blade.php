@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    <div style='overflow:hidden;'>
    @if(Storage::exists('public/products/'.$product->id.'.jpg'))
        <img src="{{ asset('storage/products/'.$product->id.'.jpg') }}" alt="" style="border-radius: 6px; border:1px solid silver; max-width: 400px; float:left; margin-right:10px;">
    @endif
   

    {!! $product->description !!}

    </div>

</div>
@stop