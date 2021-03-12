@extends('site')
@section('content')

<div class="container">

    <h1 class="title-page"> {{ $seo['title'] }} </h1>


    <div class="contact-item">
        <h4>Головной офис</h4>
        
        <div>г.Уральск, ул. Жангир Хана 35/6</div>
        <div><b>Тел.:</b> +7 (777)-797 63 36</div>
        <div><b>Email:</b> abn@abntechnology.kz</div>

        <div><b>Бухгалтерии:</b> +7 (777)-797 78 81</div>
        <div><b>Email:</b> finance@abntechnology.kz</div>

        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2c914ce71c3becf543266f1cba994220e535f555ea8f6ae095cda0af690fd160&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>


    </div>

    <div class="contact-item">
        <h4>Филиал </h4>
        <div>г.Кокшетау, ул. 8 Марта, 51</div>
        <div><b>Тел.:</b> +7 (777) 797 63 36</div>
        <div><b>Email:</b> direction@abntechnology.kz</div> 

        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2c914ce71c3becf543266f1cba994220e535f555ea8f6ae095cda0af690fd160&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>

    </div>

    <div class="contact-item">
        <h4>Филиал </h4>
        <div>г.Астана, пр-т Туран 46/1</div> 
        <div><b>Тел.:</b> +7 (777)-797 63 36</div>
        <div><b>Email:</b> direction@abntechnology.kz</div> 
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2c914ce71c3becf543266f1cba994220e535f555ea8f6ae095cda0af690fd160&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    </div>

    <div class="contact-item">
        <h4>Петропавловск, Павлодар</h4>
        <div><b>Виктор Першин </b> +7 777 797 73 03 - менеджер по продажам</div>
    </div>

</div>
@stop