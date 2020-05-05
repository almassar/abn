@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/news-form') ])
    @slot('title')
        {{ $seo['title'] }} - {{ $newsList->total() }}
    @endslot

    @slot('titleAddBtn')
        <span class="d-none d-sm-inline">Добавить</span> новость
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">
    <table class="table table-hover table-article">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th class="">Создана</th>
                <th class="">Фото</th>
                <th class=""></th>
            </tr>
        </thead>

        @foreach($newsList as $news)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    <a class="table-btn-edit"  title="Редактировать" href="{{ url('admin/news-form/'.$news->id) }}">
                        {{ $news->name }}
                    </a>
                </td>

                <td class="">
                    {{ $news->created_at }}
                </td>


                <td class="">
                    @if(Storage::exists('public/news/'.$news->id.'.jpg'))
                        <img src="{{ asset('storage/news/'.$news->id.'.jpg') }}" alt="" style="width: 200px">
                    @endif
                </td>


                <td class="d-none d-md-table-cell">
                    <a class="table-btn-destroy" title="Удалить" href="{{ url('admin/news-delete/'.$news->id) }}">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

{{ $newsList->links() }}
</div>
@stop