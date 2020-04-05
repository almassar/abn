@extends('admin')
@section('content')

@component('admin.parts.panel-title')
    @slot('title')
        {{ $seo['title'] }}
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">
    <div class="row">
        <div class="col-24">
            Добро пожаловать
        </div>
    </div>
</div>


@stop

