@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>

    @foreach ($newsList as $news)

        <div class="news-item">

            @if(Storage::exists('public/news/'.$news->id.'.jpg'))
                <img src="{{ asset('storage/news/'.$news->id.'.jpg') }}" alt="" style="width: 200px">
            @endif


            <a class="table-btn-edit"  title="Редактировать" href="{{ url('news-view/'.$news->id) }}">
                {{ $news->name }}
            </a>

        </div>
    @endforeach


    {{ $newsList->links() }}

</div>
@stop