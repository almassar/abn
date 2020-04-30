<div class="header-menu">
<div class="container">
    <ul>
        <li>
            <a href="#">
                <span><i class="fas fa-home fa-fw"></i></span>
                Главная
            </a>
        </li>
        <li>
            <a href="#">
                <span><i class="fas fa-newspaper fa-fw"></i></span>
                Новости
            </a>
        </li>
        <li>
            <a href="#">
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
            <a href="#">
                <span><i class="fas fa-building fa-fw"></i></span>
                О компании
            </a>
        </li>
        <li>
            <a href="#">
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
                    <img src="{{ asset('images/kolos.png')}}">
                    
                    <div class="logo-title"> АБН</div>
                    <div class="logo-desc">технологий</div>


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
                <a href="">
                    <span><i class="fas fa-seedling fa-fw"></i></span>
                    Внесение удобрений
                </a>
            </li>

            <li>
                <a href="">
                    <span><i class="fas fa-seedling fa-fw"></i></span>
                    Посевная и посадочная техника
                </a>
            </li>

            <li>
                <a href="">
                    <span><i class="fas fa-seedling fa-fw"></i></span>
                    Техника для обработки почвы
                </a>
            </li>

            <li>
                <a href="">
                    <span><i class="fas fa-seedling fa-fw"></i></span>
                    Удобрение
                </a>
            </li>

            <li>
                <a href="">
                    <span><i class="fas fa-cogs fa-fw"></i></span>
                    Запасные части
                </a>
            </li>

        </ul>
    </div>
</div>

