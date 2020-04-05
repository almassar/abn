@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    <ul class="companies">
        @foreach($companies as $company)
            <li>
                <div class="company-name">
                    <a href="{{ url('company-view/'.$company->slug) }}">
                        {{ $loop->iteration + $companies->perPage() * ($companies->currentPage() - 1) }}.
                        {{ $company->name }}
                    </a>
                </div>

                {{ $company->phone }}

                {{ $company->address }}
            </li>
        @endforeach
    </ul>

    {{ $companies->links() }}

</div>
@stop