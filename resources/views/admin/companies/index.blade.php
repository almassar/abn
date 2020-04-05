@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/article-form') ])
    @slot('title')
        {{ $seo['title'] }}
    @endslot

@endcomponent

@include('components.flash')

<div class="container-fluid">

    <table class="table table-hover table-article">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th class="d-none d-md-table-cell">Создана</th>
                <th class="d-none d-md-table-cell">Тэги</th>
                <th class="d-none d-md-table-cell" >Автор</th>
                <th class="d-none d-md-table-cell"></th>
            </tr>
        </thead>


    </table>


</div>
@stop