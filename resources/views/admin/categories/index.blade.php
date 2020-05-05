@extends('admin')
@section('content')

@component('admin.parts.panel-title')
    @slot('title')
        {{ $seo['title'] }}
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
        </tr>
    </thead>
        
    @foreach($categories as $category)
        <tr>
            <td>
                {{ $loop->iteration }}
            </td>

            <td>
                <a class="table-btn-edit"  title="Редактировать" href="#">
                    {{ $category->name }}
                </a>
            </td>

        </tr>
    @endforeach

</table>

</div>
@stop