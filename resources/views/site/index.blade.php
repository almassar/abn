@extends('site')
@section('content')

<div class="container">
    <agile :autoplay=true>

        @foreach ($slides as $slide)
            <img class="slide" src="{{ asset('storage/slides/'.$slide->id.'.jpg') }}"/>
        @endforeach
      
        <template slot="prevButton"><i class="fas fa-chevron-left"></i></template>
        <template slot="nextButton"><i class="fas fa-chevron-right"></i></template>
    </agile>
</div>

<div class="index-service">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="block-service">
                    <div class="header-service">
                        <span><i class="fas fa-certificate fa-fw"></i></span>
                        <h4>Качество</h4>
                    </div>
                    <p>
                        Адаптируя существующие технологии в разных условиях Казахстана, мы особое внимание уделяем качеству соблюдения технологий, а также качеству используемых для этого орудий и препаратов.
                    </p>
                </div>

            </div>

            <div class="col-xl-8">
                <div class="block-service">
                <div class="header-service">
                    <span><i class="fas fa-hand-holding-usd fa-fw"></i></span>
                    <h4>Выгода</h4>
                    </div>
                    <p>
                        Мы рассматриваем каждого корпоративного клиента как экономический объект, который имеет одно состояние в начале работы с нами и другое  и по результатам работы с нами.
                    </p>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="block-service">
                <div class="header-service">
                    <span><i class="fas fa-handshake fa-fw"></i></span>
                    <h4>Партнеры</h4>
                    </div>
                    <p>
                    Мы сотрудничаем с ведущими производителями, финансовыми институтами, опытными станциями, учеными, агросообществами!
                    </p>
                </div>
            </div>

        </div>
   
    </div>
</div>

<div class="index-news">
<div class="container">
    <div class="row">

        @foreach ($news as $lastNews)
            <div class="col-xl-6">
                <img src="{{ asset('storage/news/'.$lastNews->id.'.jpg') }}" alt="{{ $lastNews->name }}">
                <a href="{{ url('news-view/'.$lastNews->id) }}">{{ $lastNews->name }}</a>
            </div>
        @endforeach
        
       
    </div>
</div>
</div>

<div class="index-partner">
    <div class="container">
        <div class="row">
            <div class="col-xl-24">
                <ul>
                    @foreach ($partners as $partner)
                        <li>
                            <a href="{{ $partner->link }}" target="_blank">
                                <img src="{{ asset('storage/partners/'.$partner->id.'.jpg') }}" alt="{{ $partner->name }} ">
                            </a>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
</div>

@stop
