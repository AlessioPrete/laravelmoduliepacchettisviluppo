@extends(alessioprete_view('frontend.layouts.base'))

@section('content')
    @component(alessioprete_view('frontend.components.header'))@endcomponent
    <div class="ps-section--hero"><img src="/packages/alessioprete/images/hero/03.jpg" alt="">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">Il mestro pasticcere</h3>
        </div>
    </div>
    <div class="ps-section ps-section--about pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" id="testo">
                    <div class="ps-section__header text-center">
                        <div class="ps-section__top">Mi presento</div>
                        <h3 class="ps-section__title">Sebastiano caridi</h3>
                    </div>
                    <div class="ps-section__content text-center align-bottom">
                        <h3 style="text-align: justify">Classe 1988, Sebastiano Caridi nasce a Reggio Calabria; figlio d’arte-suo padre è il noto Maestro Pasticcere Paolo Caridi – Sebastiano inizia ad appassionarsi all’arte pasticcera in tenera età, ed è proprio in questa prima fase della sua vita che comincia a lavorare nel laboratorio di famiglia.</h3>
                        <p style="text-align: justify">Dopo aver ottenuto il diploma all’Istituto Alberghiero di Villa San Giovanni(2007), Sebastiano frequenta la Cast alimenti di Brescia, rinomata Accademia d’Italia della pasticceria, e qui entra in contatto con alcuni tra I maestri pasticceri più famosi e riconosciuti, tra cui Luigi Biasetto, Roberto Rinaldini, Iginio Massari e Leonardo di Carlo.

                            Ed è proprio in quegli anni che Sebastiano comincia a intraprendere la strada dei concorsi: dal 2005 al 2007 si classifica in ottime posizioni alla Rassegna del Dolce Reggino, e sempre nel 2007 si aggiudica rispettivamente il secondo e il terzo posto al Concorso Internazionale “Bartolomeo Scappi” e all’Eurochocolate di Perugia. Successivamente, collabora alla stesura di un libro del Maestro Internazionale Eliseo Tonti intitolato “L’evoluzione del cioccolato”, e tra il 2011 e il 2012 lavora col Maestro Stefano Laghi a diversi progetti e iniziative, tra cui il suo lavoro come capo produzione specializzandosi nella sua grande passione, quella del cioccolato.

                            Ma l’anno d’oro di Sebastiano è il 2015: oltre a diventare coach del Campionato Italiano Juniores col suo dessert al piatto (che si aggiudica il primo posto nazionale e il terzo nella classifica generale), vince-con la torta “rivelazione” – “Il più grande pasticcere”, rinomato reality show in onda su RAI 2 nella stagione 2014-2015; da allora, un susseguirsi di successi e soddisfazioni hanno trasformato il suo sogno in realtà.

                            Nel 2016 ha aperto la sua prima pasticceria in corso Saffi a Faenza assieme al socio Giorgio Gonelli, e nel 2018 diventa ufficialmente Maestro dell’Accademia Maestri Pasticceri Italiani, aggiungendo un tassello in più a una carriera costellata di successi dovuti soprattutto alla caparbietà, all’umiltà e allo spirito di sacrificio che lo contraddistinguono.

                            Il suo motto è: “Creo tutti I giorni usando il cuore, per imparare a crescere e per continuare a stupirvi.”
                        </p>
                        <div class="ps-about__sign text-center mb-20"><img src="packages/alessioprete/images/Firma-Nera.png"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 align-bottom" id="foto">
                    <div style="display: block; width: 100%; height: 100%; background-image: url('packages/alessioprete/images/Sebastiano.png'); background-size: cover;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section ps-section--award pt-80 pb-40">
        <div class="container">
            <div class="ps-section__header text-center mb-50">
                <div class="ps-section__top">I nostri premi</div>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-award text-center">
                            <div class="ps-award__icon"><img src="packages/alessioprete/images/award/01.png" alt=""></div>
                            <div class="ps-award__content">
                                <h3>BAKERY OF THE YEAR</h3><span>2010 - 2012</span>
                                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-award text-center">
                            <div class="ps-award__icon"><img src="packages/alessioprete/images/award/02.png" alt=""></div>
                            <div class="ps-award__content">
                                <h3>CUPCAKES SHOP OF THE YEAR</h3><span>2010 - 2012</span>
                                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-award text-center">
                            <div class="ps-award__icon"><img src="packages/alessioprete/images/award/02.png" alt=""></div>
                            <div class="ps-award__content">
                                <h3>BAKERY OF THE MONTH</h3><span>2010 - 2012</span>
                                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
