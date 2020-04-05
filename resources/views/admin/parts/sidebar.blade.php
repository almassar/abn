<a class="sidebar-title" href="{{ url('/') }}">TeoLeo.ru</a>

<ul>
    <li>
        <a href="{{ url('admin') }}">
            <span><i class="fas fa-home fa-fw"></i></span>
            Главная
        </a>
    </li>

    <li>
        <a href="{{ url('admin/company-categories') }}">
            <span><i class="fas fa-th fa-fw"></i></span>
            Категории
        </a>
    </li>

     <li>
        <a href="{{ url('admin/companies') }}">
            <span><i class="far fa-building fa-fw"></i></span>
            Компании
        </a>
    </li>

    <li>
        <a href="{{ url('admin/tags') }}">
            <span><i class="fas fa-tags fa-fw"></i></span>
            Тэги
        </a>
    </li>

    <li>
        <a href="{{ url('logout') }}">
            <span><i class="fas fa-sign-out-alt fa-fw"></i></span>
            Выход
        </a>
    </li>

</ul>