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
            <a href="#">
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

        <div class="col-xl-4">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-new.jpg')}}">
                   <!-- 
                    <div class="logo-title"> АБН</div>
                    <div class="logo-desc">технологий</div>
                   -->

                </a>
            </div>
        </div>

        <div class="col-xl-6 header-contact">
            <div><span><i class="fas fa-mobile-alt fa-fw"></i></span> +7 (777) 797-63-36</div>
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
                <a href="{{ url('products/1') }}">
                    <span><i class="fas fa-seedling fa-fw"></i></span>
                    Опрыскиватели
                </a>
            </li>

            <li>
                <a href="{{ url('products/2') }}">
                    <span><i class="fas fa-tractor fa-fw"></i></span>
                    Посевная техника
                </a>

                <ul>
                    <li><a href="{{ url('products/type/1') }}">Пневматические сеялки</a></li>
                    <li><a href="{{ url('products/type/2') }}">Компактные сеялки</a></li>
                    <li><a href="{{ url('products/type/3') }}">Механические сеялки</a></li>
                    <li><a href="{{ url('products/type/4') }}">Пропашные сеялки</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('products/3') }}">
                    <span><i class="fas fa-seedling fa-fw"></i></span>
                    Техника для обработки почвы
                </a>

                <ul>
                    <li><a href="{{ url('products/type/5') }}">Вертикальная почвообработка</a></li>
                    <li><a href="{{ url('products/type/6') }}">Традиционная почвообработка</a></li>
                </ul>

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

            <li>
                <a href="{{ url('products/6') }}">
                    <span><i class="fas fa-cogs fa-fw"></i></span>
                    Семена
                </a>
            </li>

            <li>
                <a href="{{ url('products/7') }}">
                    <span><i class="fas fa-cogs fa-fw"></i></span>
                    Уборочные агрегаты
                </a>
            </li>
        </ul>
    </div>
</div>

