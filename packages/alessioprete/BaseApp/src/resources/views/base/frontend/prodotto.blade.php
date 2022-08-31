@extends('layouts.base')

@section('content')
    @component('components.header')@endcomponent
    <div class="ps-section--hero"><img src="images/hero/01.jpg" alt="">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">LIEVITATI</h3>
            <div class="ps-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="ps-section pt-80 pb-80">
        <div class="container">
            <div class="ps-product--detail">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="ps-product__thumbnail">
                            <div class="ps-badge"><span>50%</span></div>
                            <div class="owl-slider primary" data-owl-auto="true" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;">
                                <div class="ps-product__image"><a href="images/cake/img-cake-12.jpg"><img src="images/cake/img-cake-12.jpg" alt=""></a></div>
                                <div class="ps-product__image"><a href="images/cake/img-cake-11.jpg"><img src="images/cake/img-cake-11.jpg" alt=""></a></div>
                                <div class="ps-product__image"><a href="images/cake/img-cake-10.jpg"><img src="images/cake/img-cake-10.jpg" alt=""></a></div>
                                <div class="ps-product__image"><a href="images/cake/img-cake-6.jpg"><img src="images/cake/img-cake-6.jpg" alt=""></a></div>
                                <div class="ps-product__image"><a href="images/cake/img-cake-5.jpg"><img src="images/cake/img-cake-5.jpg" alt=""></a></div>
                            </div>
                            <div class="owl-slider second mb-30" data-owl-auto="true" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="20" data-owl-nav="false" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;"><img src="images/cake/img-cake-12.jpg" alt=""><img src="images/cake/img-cake-11.jpg" alt=""><img src="images/cake/img-cake-10.jpg" alt=""><img src="images/cake/img-cake-6.jpg" alt=""><img src="images/cake/img-cake-5.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                        <header>
                            <h3 class="ps-product__name">Anytime Cakes</h3>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
                            <p class="ps-product__price">€15.00 <del>€25.00</del></p><a class="ps-product__quickview popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out">QUICK OVERVIEW</a>
                            <div class="ps-product__description">
                                <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.</p>
                                <p>Toffee chocolate cake apple pie sugar plum sesame snaps muffin cake pudding cupcake. Muffin danish muffin lollipop biscuit jelly beans oat cake croissant.</p>
                            </div>
                            <div class="ps-product__meta">
                                <p><span> Disponibilità: </span> In stock</p>
                                <p class="category"><span>CATEGORIA: </span><a href="product-grid.html">Cupcake</a>,<a href="product-grid.html"> organic</a>,<a href="product-grid.html"> sugar</a>,<a href="product-grid.html"> sweet</a>,<a href="product-grid.html"> bio</a></p>
                            </div>
                            <div class="form-group ps-product__size">
                                <label>Opzione:</label>
                                <select class="ps-select" data-placeholder="Popupar product">
                                    <option value="01">Confezioe da 12</option>
                                    <option value="01">Item 01</option>
                                    <option value="02">Item 02</option>
                                    <option value="03">Item 03</option>
                                </select>
                            </div>
                            <div class="ps-product__shop">
                                <div class="form-group--number">
                                    <button class="minus"><span>-</span></button>
                                    <input class="form-control" type="text" value="1">
                                    <button class="plus"><span>+</span></button>
                                </div>
                                <ul class="ps-product__action">
                                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                </ul>
                            </div>
                        </header>
                        <footer>
                            <div class="row">
                                <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 "><a class="ps-btn--fullwidth ps-btn" href="#">Ordina<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <div class="ps-product__info">
                    <ul class="tab-list" role="tablist">
                        <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Descrizione</a></li>
                        <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Recensioni</a></li>
                        <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">Dettagli</a></li>
                    </ul>
                </div>
                <div class="tab-content mb-60">
                    <div class="tab-pane active" role="tabpanel" id="tab_01">
                        <p>Caramels tootsie roll carrot cake sugar plum. Sweet roll jelly bear claw liquorice. Gingerbread lollipop dragée cake. Pie topping jelly-o. Fruitcake dragée candy canes tootsie roll. Pastry jelly-o cupcake. Bonbon brownie soufflé muffin.</p>
                        <p>Sweet roll soufflé oat cake apple pie croissant. Pie gummi bears jujubes cake lemon drops gummi bears croissant macaroon pie. Fruitcake tootsie roll chocolate cake Carrot cake cake bear claw jujubes topping cake apple pie. Jujubes gummi bears soufflé candy canes topping gummi bears cake soufflé cake. Cotton candy soufflé sugar plum pastry sweet roll..</p>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_02">
                        <p>1 review for Cupcakes Red Flowers</p>
                        <div class="ps-review-box">
                            <div class="ps-review-box__thumbnail"><img src="images/blog/people.png" alt=""></div>
                            <div class="ps-review-box__content">
                                <header>
                                    <select class="ps-rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p>By<a href=""> Alena Studio</a> - November 25, 2017</p>
                                </header>
                                <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_04">
                        <div class="form-group">
                            <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
                        </div>
                        <div class="form-group">
                            <button class="ps-btn" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ps-section ps-section--best-seller pt-40 pb-100">
        <div class="container">
            <div class="ps-section__header text-center mb-50">
                <h4 class="ps-section__top">DOLCI TENTAZIONI</h4>
                <h3 class="ps-section__title ps-section__title--full">PRODOTTI CORRELATI</h3>
            </div>
            <div class="ps-section__content">
                <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="100000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-7.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Red sugar flower</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">cupcake</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
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
                        <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-2.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Cupcake Queen</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">cupcake</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
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
                        <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-4.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Cupcake Glory</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">cupcake</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
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
                        <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-8.jpg" alt="">
                            <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">Sweet Cakes</a>
                            <div class="ps-product__category"><a class="ps-product__category" href="product-listing.html">cupcake</a><a class="ps-product__category" href="product-listing.html">sweet</a><a class="ps-product__category" href="product-listing.html">bio</a>
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
        </div>
    </section>
@endsection
