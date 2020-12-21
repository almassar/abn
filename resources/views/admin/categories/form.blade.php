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
        <form class="form-well" action="{{ url('admin/article-save/'.optional($article)->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="name">Название статьи</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="{{ optional($article)->name }}" required id="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="image">Выберите картинку</label>
                        <input type="file" name="image" required id="image">
                    </div>
                 </div>
            </div>

            <div class="row">
                <div class="col-24">
                    @foreach($tags as $tag)
                        <div class="form-check">
                            <input type="checkbox" value="{{ $tag->id }}" id="{{ $tag->id }}" name="tags[]">
                            <label for="{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="content">Статья</label>
                        <textarea id="content" class="tinymce" style="font-size: 14px;" rows="15" name="content">{{ optional($article)->content }}</textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-success btn-sm"><span><i class="fas fa-check"></i></span> Сохранить</button>

        </form>
    </div>
</div>
</div>

@stop
