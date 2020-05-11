@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/product-form') ])
    @slot('title')
        {{ $seo['title'].' - '.$products->total().' штук' }}
    @endslot

    @slot('titleAddBtn')
        <span class="d-none d-sm-inline">Добавить</span> продукцию
    @endslot

@endcomponent

@include('components.flash')

<ul class='category-nav'>
    @foreach($categories as $category)
        <li>
            <a href="{{ url('admin/products/'.$category->id) }}">
                {{ $category->name }}
            </a>
        </li>
    @endforeach
</ul>

<div class="container-fluid">

    <table class="table table-hover table-article">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th class="d-none d-md-table-cell">Фото</th>
                <th class="d-none d-md-table-cell">Категория</th>
                <th class="d-none d-md-table-cell">Подкатегория</th>
                <th class="d-none d-md-table-cell">Описание</th>
                <th class="d-none d-md-table-cell"></th>
            </tr>
        </thead>

        @foreach($products as $product)
        <tr>
            <td>
                {{ $loop->iteration }}
            </td>

            <td>
                <a class="table-btn-edit"  title="Редактировать" href="{{ url('admin/product-form/'.$product->id) }}">
                    {{ $product->name }}
                </a>
            </td>

            <td>
                @if(Storage::exists('public/products/'.$product->id.'.jpg'))
                    <img src="{{ asset('storage/products/'.$product->id.'.jpg') }}" alt="" style="width: 200px">
                @endif
            </td>

            <td>
                {{ $product->category->name }}
            </td>

            <td>
                {{ $product->type->name }}
            </td>


        </tr>
        @endforeach

    </table>

    {{ $products->links() }}

</div>
@stop