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
        <form class="form-well" action="{{ url('admin/slide-save/'.optional($slide)->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="{{ optional($slide)->name }}" required id="name">
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

                @if(Storage::exists('public/slides/'.optional($slide)->id.'.jpg'))
                    <img src="{{ asset('storage/slides/'.$slide->id.'.jpg') }}" alt="" style="width: 200px">
                @endif
            </div>

           

            <button class="btn btn-success btn-sm"><span><i class="fas fa-check"></i></span> Сохранить</button>

        </form>
    </div>
</div>
</div>

@stop
