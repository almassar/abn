@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/tag-form') ])
    @slot('title')
        {{ $seo['title'] }} - {{ $tags->count() }}
    @endslot

    @slot('titleAddBtn')
        <span class="d-none d-sm-inline">Добавить</span> тэг
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">
    <table class="table table-hover table-tag">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th class="d-none d-md-table-cell"></th>
            </tr>
        </thead>

        @foreach($tags as $tag)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    <a class="table-btn-edit"  title="Редактировать" href="{{ url('admin/tag-form/'.$tag->id) }}">
                        {{ $tag->name }}
                    </a>
                </td>

                <td class="d-none d-md-table-cell">
                    <a class="table-btn-destroy" title="Удалить" href="{{ url('admin/tag-delete/'.$tag->id) }}">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop