@if(config('app.env') == 'local')
    <div class="debug-size-screen">
        <div class="d-none d-xl-block">
            xl
        </div>

        <div class="d-none d-lg-block d-xl-none">
            lg
        </div>

        <div class="d-none d-md-block d-lg-none">
            md
        </div>

        <div class="d-none d-sm-block d-md-none">
            sm
        </div>

        <div class="d-block d-sm-none">
            xs
        </div>
    </div>
@endif