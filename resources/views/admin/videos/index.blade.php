@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/video-form') ])
    @slot('title')
        {{ $seo['title'] }} 
    @endslot

    @slot('titleAddBtn')
        <span class="d-none d-sm-inline">Добавить</span> видео
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">
    <table class="table table-hover table-article">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th class=""></th>
            </tr>
        </thead>

        @foreach($videos as $video)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    <a class="table-btn-edit"  title="Редактировать" href="{{ url('admin/video-form/'.$video->id) }}">
                        {{ $video->name }}
                    </a>
                </td>

                <td class="d-none d-md-table-cell">
                    <a class="table-btn-destroy" title="Удалить" href="{{ url('admin/video-delete/'.$video->id) }}">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop