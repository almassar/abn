@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/partner-form') ])
    @slot('title')
        {{ $seo['title'] }} 
    @endslot

    @slot('titleAddBtn')
        <span class="d-none d-sm-inline">Добавить</span> партнера
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">
    <table class="table table-hover table-article">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Сылка</th>
                <th class="">Фото</th>
                <th class=""></th>
            </tr>
        </thead>

        @foreach($partners as $partner)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    <a class="table-btn-edit"  title="Редактировать" href="{{ url('admin/partner-form/'.$partner->id) }}">
                        {{ $partner->name }}
                    </a>
                </td>

                <td>
                    <a href="{{ $partner->link }}" target="_blank">
                        {{ $partner->link }}
                    </a>
                </td>
            
                <td class="">
                    @if(Storage::exists('public/partners/'.$partner->id.'.jpg'))
                        <img src="{{ asset('storage/partners/'.$partner->id.'.jpg') }}" alt="" style="width: 200px">
                    @endif
                </td>

                <td class="d-none d-md-table-cell">
                    <a class="table-btn-destroy" title="Удалить" href="{{ url('admin/partner-delete/'.$partner->id) }}">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop