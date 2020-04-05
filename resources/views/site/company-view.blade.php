@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    {{ $company->phone }}

    {{ $company->address }}

</div>
@stop