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
                        Мы отвечаем за контроль качества удобрений на каждом этапе производства
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
                    Гибкая система скидок, бесплатная доставка до конечного клиента, агрономическое сопровождение, подбор индивидуальных схем применения удобрений
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
                    Мы сотрудничаем с ведущими производителями, агрохимслужбами, станциями защиты растений
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
