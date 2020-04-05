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
        <form class="form-well" action="{{ url('admin/tag-save/'.optional($tag)->id) }}" method="post">
            {!! csrf_field() !!}

            <div class="row">
                <div class="col-24">
                    <div class="form-group">
                        <label for="name">Наименование тэга</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="{{ optional($tag)->name }}" required id="name">
                    </div>
                </div>
            </div>

            <button class="btn btn-success btn-sm"><span><i class="fas fa-check"></i></span> Сохранить</button>

        </form>
    </div>
</div>
</div>

@stop
