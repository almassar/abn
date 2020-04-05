@extends('admin')
@section('content')

@component('admin.parts.panel-title', ['url' => url('admin/article-form') ])
    @slot('title')
        {{ $seo['title'] }}
    @endslot

    @slot('titleAddBtn')
        <span class="d-none d-sm-inline">Добавить</span> категорию
    @endslot
@endcomponent

@include('components.flash')

<div class="container-fluid">

     <div class="category-tree-site">
        {!! View::make('components.categories')->with([
            'prefixUrl' => 'admin/company-categories', 'repository' => new \App\Modules\CompanyCategories\CompanyCategoryRepository()
        ]) !!}
    </div>

</div>
@stop