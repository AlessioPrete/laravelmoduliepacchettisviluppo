@extends(alessioprete_view('frontend.layouts.base'))

@section('content')
    @component(alessioprete_view('frontend.components.header'))@endcomponent
    <div class="ps-section--hero"><img src="packages/alessioprete/images/team/Staff.jpg" alt="">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">Mani d'oro</h3>
        </div>
    </div>
    <section class="ps-section ps-section--team ps-section--team-2 pt-80 pb-80">
        <div class="container">
            <div class="ps-section__header text-center mb-20">
                <div class="ps-section__top">Sempre con le mani in pasta!</div>
                <h3 class="ps-section__title ps-section__title--full">IL NOSTOR TEAM</h3>
                <h4>Affiatati, sempre cortesi e disponibili nei confronti della clientela.</h4>
                <h4>Costantemente aggiornati su prodotti, tecniche di lavorazione e novità del settore.</h4>
                <h4>Siamo lieti di presentare il nostro team</h4>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 "></div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <article class="ps-people ps-people--2">
                            <div class="ps-people__thumbnail"><a class="ps-people__overlay" href="#"></a><img src="packages/alessioprete/images/team/gioeseba.jpg" alt=""></div>
                            <div class="ps-people__content">
                                <h4>Giorgio e Sebastiano</h4><span class="ps-people__position">CEO - Founder</span>
                                <p>bla bla bla bla.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 "></div>
                </div>
        </div>
    </section>
    <div class="ps-section--hero"><img src="packages/alessioprete/images/team/joinus.jpg" alt="">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">Lavora con noi</h3>
        </div>
    </div>
    <section class="ps-section ps-section--team ps-section--team-2 pt-80 pb-80">
        <div class="container">
            <div class="ps-section__header text-center mb-20">
                <div class="ps-section__top">Entra a far parte del nostro staff!</div>
                <h4>Mettiamo passione e impegno in tutto ciò che facciamo.</h4>
                <h4>La nostra organizzazione utilizza solo prodotti di qualità e innovativi.</h4>
                <h4>Se condividi i nostri valori, hai voglia di fare, ti piace imparare, sei il benvenuto nel nostro staff di Faenza e Bologna.</h4>
                <h4>Cerchiamo: <strong>Pasticcieri, Maitre, Commessi, Camerieri</strong></h4>
                <h4>Contattaci, inviaci una breve introduzione con il tuo Curriculum (Dimensione massima 1Mbyte)</h4>
                <h4>Inserisci nell'oggetto la mansione e la località per cui vuoi candidarti.</h4>
            </div>
            <div class="ps-contact ps-contact--2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-center">
                        <div class="ps-contact__form">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Nome e Cognome">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Telefono">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Oggetto">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Una breve presentazione..."></textarea>
                            </div>
                            <div class="form-group text-center mt-30">
                                <button class="ps-btn ps-btn--sm ps-contact__submit">Invia</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>

    <div class="ps-section ps-section--partner">
        <div class="container">
            <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="40" data-owl-nav="false" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="6" data-owl-item-xs="3" data-owl-item-sm="4" data-owl-item-md="5" data-owl-item-lg="6" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;"><a href="#"><img src="packages/alessioprete/images/partner/1.png" alt=""></a><a href="#"><img src="packages/alessioprete/images/partner/2.png" alt=""></a><a href="#"><img src="packages/alessioprete/images/partner/3.png" alt=""></a><a href="#"><img src="packages/alessioprete/images/partner/4.png" alt=""></a><a href="#"><img src="packages/alessioprete/images/partner/5.png" alt=""></a><a href="#"><img src="packages/alessioprete/images/partner/6.png" alt=""></a><a href="#"><img src="packages/alessioprete/images/partner/7.png" alt=""></a><a href="#"><img src="packages/alessioprete/images/partner/8.png" alt=""></a>
            </div>
        </div>
    </div>
@endsection
