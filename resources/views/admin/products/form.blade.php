@extends('admin')
@section('content')

@component('admin.parts.panel-title')
    @slot('title')
        {{  $seo['title'] }}
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">
<div class="row">
    <div class="col-xl-15 col-lg-15 col-md-18">
        <form class="form-well" action="{{ url('admin/product-save/'.optional($product)->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="name">Название продукции</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="{{ optional($product)->name }}" required id="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="name">Категория</label>
                        <select name='category_id' required class="form-control">
                            @foreach ($categories as $category)
                                <option {{ $category->id == optional($product)->category_id ? 'selected' : '' }} value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="image">Выберите картинку</label>
                        <input type="file" name="image" id="image">
                    </div>
                 </div>

                @if(Storage::exists('public/products/'.$product->id.'.jpg'))
                    <img src="{{ asset('storage/products/'.$product->id.'.jpg') }}" alt="" style="width: 200px">
                @endif
            
            </div>

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="content">Описание</label>
                        <textarea id="content" class="tinymce" style="font-size: 14px;" rows="15" name="description">{{ optional($product)->description }}</textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-success btn-sm"><span><i class="fas fa-check"></i></span> Сохранить</button>

        </form>
    </div>
</div>
</div>

@stop
