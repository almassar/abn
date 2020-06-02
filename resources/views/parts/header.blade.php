<div class="header-menu">
<div class="container">
    <ul>
        <li>
            <a href="{{ url('/') }}">
                <span><i class="fas fa-home fa-fw"></i></span>
                Главная
            </a>
        </li>
        <li>
            <a href="{{ url('news') }}">
                <span><i class="fas fa-newspaper fa-fw"></i></span>
                Новости
            </a>
        </li>
        <li>
            <a href="{{ url('partners') }}">
                <span><i class="fas fa-handshake fa-fw"></i></span>
                Партнеры
            </a>
        </li>
        <li>
            <a href="{{ url('videos') }}">
                <span><i class="fas fa-video fa-fw"></i></span>
                Видео
            </a>
        </li>
        <li>
            <a href="{{ url('about') }}">
                <span><i class="fas fa-building fa-fw"></i></span>
                О компании
            </a>
        </li>
        <li>
            <a href="{{ url('contact') }}">
                <span><i class="fas fa-phone-alt fa-fw"></i></span>
                Контакты
            </a>
        </li>
    </ul>
</div>
</div>


<div class="container">
    <div class="row align-items-center justify-content-between">

        <div class="col-xl-4 col-10">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png')}}">
                   <!-- 
                    <div class="logo-title"> АБН</div>
                    <div class="logo-desc">технологий</div>
                   -->

                </a>
            </div>
        </div>

        <div class="col-xl-6 col-14 header-contact">
            <div><span><i class="fas fa-mobile-alt fa-fw"></i></span>+7 (771) 797-73-40</div>
            <div><span><i class="fas fa-envelope fa-fw"></i></span> direction@abntechnology.kz</div>
        </div>

        <div class="col-xl-9">
            <form action="{{ url('search') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Поиск ..." aria-label="Поиск компании">

                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <span><i class="fa fa-search"></i></span>
                            Найти
                        </button >
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="category-panel">
    <div class="container">
        <ul>
            <li>
                <a href="{{ url('products/3') }}">
                    {{--<span><i class="fas fa-pen-fancy fa-fw"></i></span>--}}
                    <div style="float: left; border:0px #44C3E6 solid; margin-right: 5px;">
                        <img style="width: 50px;" src="{{ asset('images/2.png')  }}" alt="">
                    </div>

                    <div style="border:0px black solid; margin-left: -5px;">
                        Обработка почвы
                    </div>
                </a>

                <ul>
                    <li><a href="{{ url('products/type/5') }}">Great Plains - Вертикальная почвообработка</a></li>
                    <li><a href="{{ url('products/type/6') }}">Great Plains - Традиционная почваобработка</a></li>
                    <li><a href="{{ url('products/type/14') }}">Einbock - Минимальная обработка почвы</a></li>
                    <li><a href="{{ url('products/type/15') }}">Einbock - Механические машины для ухода</a></li>
                    <li><a href="{{ url('products/type/16') }}">Einbock - Предпосевная подготовка почвы</a></li>
                </ul>
            </li>

            <li style="text-align: center;">
                <a href="{{ url('products/1') }}">
                    <span><i class="fas fa-tint fa-fw"></i></span>
                    Опрыскиватели
                </a>

                <ul>
                    <li><a href="{{ url('products/type/22') }}">Самоходный опрыскиватели PLA </a></li>
                    <li><a href="{{ url('products/type/10') }}">Cамоходные - МАР 3 2900 </a></li>
                    <li><a href="{{ url('products/type/18') }}">Cамоходные - МАР 3 3300 </a></li>
                    <li><a href="{{ url('products/type/19') }}">Cамоходные - МАР 3 3300Н </a></li>
                    <li><a href="{{ url('products/type/20') }}">Cамоходные - МАР 3 3600 </a></li>
                    <li><a href="{{ url('products/type/21') }}">Cамоходные - МАР 3 4100 </a></li>
                    
                    <li><a href="{{ url('products/type/11') }}">Прицепные - MLP 3000 </a></li>
                    <li><a href="{{ url('products/type/17') }}">Прицепные - MLP 3000F</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('products/2') }}">
                    <span><i class="fas fa-tractor fa-fw"></i></span>
                    Посевная техника
                </a>

                <ul>
                    <li><a href="{{ url('products/type/1') }}">Пневматические сеялки GreatPlains</a></li>
                    <li><a href="{{ url('products/type/2') }}">Компактные сеялки GreatPlains</a></li>
                    <li><a href="{{ url('products/type/3') }}">Механические сеялки GreatPlains</a></li>
                    <li><a href="{{ url('products/type/4') }}">Пневматические сеялки точного высева  GreatPlains</a></li>
                    <li><a href="{{ url('products/type/12') }}">Сеялки Einbok</a></li>
                   <!-- <li><a href="{{ url('products/type/13') }}">Сеялки PLA</a></li>-->


                </ul>
            </li>

            <li style="padding-left: 10px;">
                <a href="{{ url('products/7') }}">
                    <!--<span><i class="fas fa-snowplow fa-fw"></i></span>-->
                    <img style="width: 40px; float: left" src="{{ asset('images/1.png')  }}" alt="">
                    <div>
                        Уборочные агрегаты
                    </div>
                </a>
            </li>
            
            <li style="text-align: center">
                <a href="{{ url('products/6') }}">
                    {{--<span><i class="fas fa-tree fa-fw"></i></span>--}}
                    <img style="width: 28px;" src="{{ asset('images/3.png')  }}" alt="">

                        Семена

                </a>
            </li>

            <li>
                <a href="{{ url('products/4') }}">
                    <span><i class="fas fa-seedling fa-fw"></i></span>
                    Удобрения и СЗР
                </a>
                <ul>
                    <li><a href="{{ url('products/type/7') }}">Минеральные удобрения ИЗАГРИ</a></li>
                    <li><a href="{{ url('products/type/8') }}">Биопрепараты БИОСФЕРА</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('products/5') }}">
                    <span><i class="fas fa-cogs fa-fw"></i></span>
                    Запасные части
                </a>
            </li>

           
        </ul>
    </div>
</div>

