@extends('site')
@section('content')

<div class="container">
    <agile :autoplay=true>
        <img class="slide" src="{{ asset('storage/slides/1.jpg') }}"/>
        <img class="slide" src="{{ asset('storage/slides/2.jpg') }}"/>
        <img class="slide" src="{{ asset('storage/slides/3.jpg') }}"/>
        <img class="slide" src="{{ asset('storage/slides/4.jpg') }}"/>
        <img class="slide" src="{{ asset('storage/slides/5.jpg') }}"/>
        <img class="slide" src="{{ asset('storage/slides/6.jpg') }}"/>
      
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
                <img src="{{ asset('storage/news/'.$lastNews->id.'.jpg') }}" alt="">
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
                    <li>
                        <a href="" target="_blank">
                            <img src="{{ asset('images/bicchi.png') }}" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="{{ asset('images/einbock.png') }}" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="{{ asset('images/great_plains.png') }}" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="{{ asset('images/pla.png') }}" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="{{ asset('images/изарги.png') }}" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="{{ asset('images/казагрофинанс.png') }}" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="{{ asset('images/техно_лизинг.png') }}" alt="">
                        </a>
                    </li>
                </ul>
            
            </div>
        
        </div>
    
    </div>

</div>



@stop
