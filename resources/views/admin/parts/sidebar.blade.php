<a class="sidebar-title" href="{{ url('/') }}">АБН</a>

<ul>
    <li>
        <a href="{{ url('admin') }}">
            <span><i class="fas fa-home fa-fw"></i></span>
            Главная
        </a>
    </li>

    <li>
        <a href="{{ url('admin/categories') }}">
            <span><i class="fas fa-th fa-fw"></i></span>
            Категории
        </a>
    </li>

     <li>
        <a href="{{ url('admin/products') }}">
            <span><i class="far fa-building fa-fw"></i></span>
            Продукция
        </a>
    </li>

    <li>
        <a href="{{ url('admin/news') }}">
            <span><i class="fas fa-tags fa-fw"></i></span>
            Новости
        </a>
    </li>

    <li>
        <a href="{{ url('admin/slides') }}">
            <span><i class="fas fa-image fa-fw"></i></span>
            Слайды
        </a>
    </li>

    <li>
        <a href="{{ url('admin/partners') }}">
            <span><i class="fas fa-handshake fa-fw"></i></span>
            Партнеры
        </a>
    </li>

     <li>
        <a href="{{ url('admin/videos') }}">
            <span><i class="fas fa-video fa-fw"></i></span>
            Видео
        </a>
    </li>

    <li>
        <a href="{{ url('logout') }}">
            <span><i class="fas fa-sign-out-alt fa-fw"></i></span>
            Выход
        </a>
    </li>

</ul>