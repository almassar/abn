@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/slide-form') ])
    @slot('title')
        {{ $seo['title'] }} 
    @endslot

    @slot('titleAddBtn')
        <span class="d-none d-sm-inline">Добавить</span> слайда
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">
    <table class="table table-hover table-article">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th class="">Фото</th>
                <th class=""></th>
            </tr>
        </thead>

        @foreach($slides as $slide)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    <a class="table-btn-edit"  title="Редактировать" href="{{ url('admin/slide-form/'.$slide->id) }}">
                        {{ $slide->name }}
                    </a>
                </td>
            
                <td class="">
                    @if(Storage::exists('public/slides/'.$slide->id.'.jpg'))
                        <img src="{{ asset('storage/slides/'.$slide->id.'.jpg') }}" alt="" style="width: 200px">
                    @endif
                </td>

                <td class="d-none d-md-table-cell">
                    <a class="table-btn-destroy" title="Удалить" href="{{ url('admin/slide-delete/'.$slide->id) }}">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop