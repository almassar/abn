@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/article-form') ])
    @slot('title')
        {{ $seo['title'] }} - {{ $articles->total() }}
    @endslot

    @slot('titleAddBtn')
        <span class="d-none d-sm-inline">Добавить</span> статью
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

        @foreach($articles as $article)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    <a class="table-btn-edit"  title="Редактировать" href="{{ url('admin/article-form/'.$article->id) }}">
                        {{ $article->name }}
                    </a>
                </td>

                <td>

                </td>

                <td class="d-none d-md-table-cell">
                    {{ $article->created_at }}
                </td>


                <td class="d-none d-md-table-cell">

                </td>


                <td class="d-none d-md-table-cell">
                    <a class="table-btn-destroy" title="Удалить" href="{{ url('article-delete/'.$article->id) }}">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

{{ $articles->links() }}
</div>
@stop