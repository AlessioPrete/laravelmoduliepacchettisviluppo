@extends(alessioprete_view('frontend.layouts.base'))

@section('content')
    @component(alessioprete_view('frontend.components.header'))@endcomponent
    @component(alessioprete_view('frontend.components.slider'))@endcomponent
    <section class="ps-section ps-section--best-seller pt-40 pb-100">
        <div class="container">
            {{--            Più Venduti--}}
            <div class="ps-section__header text-center mb-50">
                <h4 class="ps-section__top">Gusta il piacere</h4>
                <h3 class="ps-section__title ps-section__title--full">I PIù VENDUTI</h3>
            </div>
            <div class="ps-section__content">
                <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/prodotti/Prodotti.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Zeppola</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">Festa del papà</a><a class="ps-product__category" href="product-listing.html">bio</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">1</option>
                            </select>
                                                        <p class="ps-product__price">€5.00</p>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/prodotti/Macarons.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Macarons</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">irresistibili</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
                                                        <p class="ps-product__price">€5.00</p>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/prodotti/Biscottiinbarattolo.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Biscotti in barattolo</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">Sempre buoni</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
                                                        <p class="ps-product__price">€5.00</p>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/prodotti/Spalmabili.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Spalmabili</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">Da leccarsi le dita</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
                                                        <p class="ps-product__price">€5.00</p>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/prodotti/tavolettamandorla.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Tavoletta alle Mandorle</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">Sempre con te</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
                                                        <p class="ps-product__price">€5.00</p>
                        </div>
                    </div>
                </div>
            </div>
            {{--            Categorie--}}
            <div class="ps-section__header text-center mb-50">
                <h4 class="ps-section__top">Categorie</h4>
                <h3 class="ps-section__title ps-section__title--full">Acquista per categoria</h3>
            </div>
            <div class="ps-section__content">
                <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="{{route('categorie')}}"></a><img src="packages/alessioprete/images/categorie/CategoriaLievitati.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="{{route('categorie')}}">Lievitati</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="#">panettone</a><a class="ps-product__category" href="#">festività</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">1</option>
                            </select>
{{--                                                        <p class="ps-product__price">€5.00</p>--}}
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/categorie/Categoria Macarons.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Macarons</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">irresistibili</a><a class="ps-product__category" href="product-listing.html">dolci</a><a class="ps-product__category" href="product-listing.html">bio</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
{{--                                                        <p class="ps-product__price">€5.00</p>--}}
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/categorie/CategoriaBiscotti.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Biscotti</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">Sempre buoni</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
{{--                                                        <p class="ps-product__price">€5.00</p>--}}
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/categorie/Categoria Torte.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="Visualizza"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Desideri"><i class="ps-icon--heart"></i></a></li>

                                <li><a href="#" data-tooltip="Aggiungi al Carrello"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Torte</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">torte secche</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
{{--                                                        <p class="ps-product__price">€5.00</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    Commenti--}}
    <div class="ps-section ps-section--home-testimonial pb-30 bg--parallax" data-background="packages/alessioprete/images/parallax/img-bg-1.jpg">
        <div class="container">
            <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;">
                <div class="ps-testimonial text-center pt-80 pb-100">
                    <div class="ps-testimonial__header">
                        <div class="ps-testimonial__thumbnail"><img src="packages/alessioprete/images/testimonial/1.jpg" alt=""></div>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Maria</p>
                    </div>
                    <div class="ps-testimonial__content">
                        <p>I dolci più buoni che abbia mai mangiato! Prodotti di qualità... bla bla bla..</p>
                    </div>
                </div>
                <div class="ps-testimonial text-center pt-80 pb-100">
                    <div class="ps-testimonial__header">
                        <div class="ps-testimonial__thumbnail"><img src="packages/alessioprete/images/testimonial/2.jpg" alt=""></div>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Marilena</p>
                    </div>
                    <div class="ps-testimonial__content">
                        <p>I dolci più buoni che abbia mai mangiato! Prodotti di qualità... bla bla bla..</p>
                    </div>
                </div>
                <div class="ps-testimonial text-center pt-80 pb-100">
                    <div class="ps-testimonial__header">
                        <div class="ps-testimonial__thumbnail"><img src="packages/alessioprete/images/testimonial/3.jpg" alt=""></div>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Mariangela</p>
                    </div>
                    <div class="ps-testimonial__content">
                        <p>I dolci più buoni che abbia mai mangiato! Prodotti di qualità... bla bla bla..</p>
                    </div>
                </div>
                <div class="ps-testimonial text-center pt-80 pb-100">
                    <div class="ps-testimonial__header">
                        <div class="ps-testimonial__thumbnail"><img src="packages/alessioprete/images/testimonial/4.jpg" alt=""></div>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Mabel</p>
                    </div>
                    <div class="ps-testimonial__content">
                        <p>I dolci più buoni che abbia mai mangiato! Prodotti di qualità... bla bla bla..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    Sezione Promo--}}
    <section class="ps-section ps-section--offer pt-80 pb-40">
        <div class="container">
            <div class="ps-section__header text-center mb-100">
                <h4 class="ps-section__top">Vogliamo rendervi felici</h4>
                <h3 class="ps-section__title ps-section__title--full">OFFERTE DEL MESE</h3>
            </div>
            <div class="ps-section__content">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        <div class="grid-item high wide">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-offer"><img src="packages/alessioprete/images/product-banner/Promo.jpg" alt=""><a class="ps-offer__overlay" href="#"></a></div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-offer"><img src="packages/alessioprete/images/product-banner/Promo2.jpg" alt=""><a class="ps-offer__overlay" href="#"></a></div>
                            </div>
                        </div>
                        <div class="grid-item high">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-offer"><img src="packages/alessioprete/images/offer/banner-3.jpg" alt=""><a class="ps-offer__overlay" href="#"></a></div>
                            </div>
                        </div>
                        <div class="grid-item wide">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-offer"><img src="packages/alessioprete/images/offer/banner-4.jpg" alt=""><a class="ps-offer__overlay" href="#"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
