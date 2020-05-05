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
        <a href="{{ url('logout') }}">
            <span><i class="fas fa-sign-out-alt fa-fw"></i></span>
            Выход
        </a>
    </li>

</ul>