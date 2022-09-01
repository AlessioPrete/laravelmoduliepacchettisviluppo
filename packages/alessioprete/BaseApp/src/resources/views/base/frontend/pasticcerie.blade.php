@extends(alessioprete_view('frontend.layouts.base'))

@section('content')
    @component(alessioprete_view('frontend.components.header'))@endcomponent
    <div class="ps-section--hero"><img src="packages/alessioprete/images/hero/Faenza.jpg" alt="">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">FAENZA</h3>
        </div>
    </div>
    <section class="ps-section ps-section--subscribe pt-80 pb-80" style="background-color: #9f9f9f;">
        <div class="container">
            <div class="ps-subscribe">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <h4>SEDE</h4>
                        <p>qui ci vanno i dati e gli orari</p>
                        <p class="text-uppercase ps-subscribe__highlight">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "><a class="ps-subscribe__logo" href="index.html"><img src="packages/alessioprete/images/logoQuadrato.jpg" alt=""></a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <h4>PRENOTA I TUOI DOLCI O UNA TORTA E PASSA A RITIRARE</h4>
                        <form class="ps-subscribe__form" method="post" action="_action">
                            <input class="form-control" type="text" placeholder="La tua email...">
                            <button class="ps-btn ps-btn--sm">Prenota</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="ps-section--hero"><img src="packages/alessioprete/images/hero/Bologna.jpg" alt="">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">BOLOGNA</h3>
        </div>
    </div>
    <section class="ps-section ps-section--subscribe pt-80 pb-80" style="background-color: #9f9f9f;">
        <div class="container">
            <div class="ps-subscribe">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <h4>SEDE</h4>
                        <p>qui ci vanno i dati e gli orari</p>
                        <p class="text-uppercase ps-subscribe__highlight">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "><a class="ps-subscribe__logo" href="index.html"><img src="packages/alessioprete/images/logoQuadrato.jpg" alt=""></a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <h4>PRENOTA I TUOI DOLCI O UNA TORTA E PASSA A RITIRARE</h4>
                        <form class="ps-subscribe__form" method="post" action="_action">
                            <input class="form-control" type="text" placeholder="La tua email...">
                            <button class="ps-btn ps-btn--sm">Prenota</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
