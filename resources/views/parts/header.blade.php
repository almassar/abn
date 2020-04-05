<div class="container">
    <div class="row align-items-center justify-content-between">

        <div class="col-xl-5">
            <div class="logo">
                <a href="{{ url('/') }}">
                    TeoLeo.Ru
                </a>
                <span>Каталог компании, товаров</span>

            </div>
        </div>

        <div class="col-xl-10">
            <form action="{{ url('search') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Поиск компании..." aria-label="Поиск компании">

                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <span><i class="fa fa-search"></i></span>
                            Найти
                        </button>
                    </div>
                </div>
            </form>
        </div>



    </div>
</div>

