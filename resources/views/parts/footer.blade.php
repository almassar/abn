<div class="container">
<div class="row">

<div class="col-xl-4">

    <div class="logo-footer">
        <h4>АБН</h4>
        <span>технологии</span>
    </div>

</div>

 <div class="col-xl-7 footer-contact">
    <div><span><i class="fab fa-whatsapp fa-fw"></i></span> +7 (771) 797-73-40</div>
    <div><span><i class="fas fa-envelope fa-fw"></i></span> abn@abntechnology.kz</div>

    <div style="margin-top: 10px;">
        <a target="_blank" href="https://facebook.com/ABNTechnology-114888127047840">
            <img style="width:30px;" src="{{ asset('images/facebook.png') }}" alt=""> 
            ABNTechnology
        </a>
    </div>

    <div style="margin-top: 10px;">
        <a target="_blank" href="https://www.instagram.com/abntechnology">
            <img style="width:30px;" src="{{ asset('images/instagram.png') }}" alt="">
            @abntechnology
        </a>

    </div>

</div>

<div class="col-xl-13 footer-menu">
        <ul>
        <li>
            <a href="{{ url('/') }}">
                {{ session('lang') == 'ru' ? 'Главная' : 'Main Page' }} 
            </a>
        </li>
        <li>
            <a href="{{ url('news') }}">
                {{ session('lang') == 'ru' ? 'Новости' : 'News' }} 
            </a>
        </li>
        <li>
            <a href="{{ url('partners') }}">
                {{ session('lang') == 'ru' ? 'Партнеры' : 'Partners' }} 
            </a>
        </li>
        <li>
            <a href="{{ url('videos') }}">
                {{ session('lang') == 'ru' ? 'Видео' : 'Video' }} 
            </a>
        </li>
        <li>
            <a href="{{ url('about') }}">
                {{ session('lang') == 'ru' ? 'О компании' : 'About the company' }} 
            </a>
        </li>
        <li>
            <a href="{{ url('contact') }}">
                {{ session('lang') == 'ru' ? 'Контакты' : 'Contacts' }} 
            </a>
        </li>
    </ul>
    </div>
    </div>
</div>