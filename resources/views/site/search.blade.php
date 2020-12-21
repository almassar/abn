@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    <h5>Поиск по: {{ $search }}</h5>

    <ul class="products {{ ($type->id ?? 0) == 7 ? 'izagri' : '' }}">
        @forelse($products as $product)
            <li>
                <div class="product-name">
                    
                    @if(Storage::exists('public/products/'.$product->id.'.jpg'))
                        <img src="{{ asset('storage/products/'.$product->id.'.jpg') }}" alt="" style="width: 200px">
                    @endif


                    <a href="{{ url('product-view/'.$product->id) }}">
                        {{ $product->name }}
                    </a>
                </div>

                <div>
                    {!! substr(strip_tags($product->description), 0, 400).' ... ' !!}
                </div>

                <a href="{{ url('product-view/'.$product->id) }}" class='btn btn-success btn-sm' style="float: right; bottom:0;">
                    Далее<span style="margin-left: 5px;"><i class="fas fa-arrow-circle-right"></i></span>
                </a>
                
            </li>
        @empty
            <p>Ничего не найдено!</p>
        @endforelse
    </ul>


</div>
@stop