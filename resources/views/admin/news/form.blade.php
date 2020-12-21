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
        <form class="form-well" action="{{ url('admin/news-save/'.optional($news)->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="name">Название новости</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="{{ optional($news)->name }}" required id="name">
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

                @if(Storage::exists('public/news/'.optional($news)->id.'.jpg'))
                    <img src="{{ asset('storage/news/'.$news->id.'.jpg') }}" alt="" style="width: 200px">
                @endif
            </div>

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="content">Новость</label>
                        <textarea id="content" class="tinymce" style="font-size: 14px;" rows="15" name="description">{{ optional($news)->description }}</textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-success btn-sm"><span><i class="fas fa-check"></i></span> Сохранить</button>

        </form>
    </div>
</div>
</div>

@stop
