@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    <ul class="products">
        @foreach($products as $product)
            <li>
                <div class="product-name">
                    
                    @if(Storage::exists('public/products/'.$product->id.'.jpg'))
                        <img src="{{ asset('storage/products/'.$product->id.'.jpg') }}" alt="" style="width: 200px">
                    @endif


                    <a href="{{ url('product-view/'.$product->id) }}">
                        {{ $loop->iteration + $products->perPage() * ($products->currentPage() - 1) }}.
                        {{ $product->name }}
                    </a>
                </div>

                <div>
                    {!! $product->ann() !!}
                </div>

                <a href="{{ url('product-view/'.$product->id) }}" class='btn btn-success btn-sm' style="float: right; bottom:0;">
                    Далее<span style="margin-left: 5px;"><i class="fas fa-arrow-circle-right"></i></span>
                </a>
                
            </li>
        @endforeach
    </ul>

    {{ $products->links() }}

</div>
@stop