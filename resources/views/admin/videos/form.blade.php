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
        <form class="form-well" action="{{ url('admin/video-save/'.optional($video)->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="{{ optional($video)->name }}" required id="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="content">Код из youtube</label>
                        <textarea id="content" class="form-control" style="font-size: 14px;" rows="15" name="player">{{ optional($video)->player }}</textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-success btn-sm"><span><i class="fas fa-check"></i></span> Сохранить</button>

        </form>
    </div>
</div>
</div>

@stop
