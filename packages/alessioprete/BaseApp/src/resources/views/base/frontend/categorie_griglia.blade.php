@extends(alessioprete_view('frontend.layouts.base'))

@section('content')
    @component(alessioprete_view('frontend.components.header'))@endcomponent
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
    <div class="ps-section--page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                    <div class="ps-shop-grid pt-80">
                        <div class="ps-shop-features">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 "><img class="mb-30" src="images/product-banner/012x.jpg" alt="">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 "><img class="mb-30" src="images/product-banner/022x.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ps-shop-filter">
                            <div class="row">
                                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Ordina:</label>
                                        <select class="ps-select" data-placeholder="Popupar product">
                                            <option value="01">Popolari</option>
                                            <option value="02">Più votati</option>
                                            <option value="03">Prezzo</option>
                                            <option value="04">Novità</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 ">
                                    <ul class="ps-shop-switch">
                                        <li class="active"><a href="{{route('categoriegriglia')}}"><i class="fa fa-th"></i></a></li>
                                        <li><a href="{{route('categorie')}}"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-shop ps-col-tiny">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail">
                                            <div class="ps-badge ps-badge--new"><span>New</span></div><a class="ps-product__overlay" href="{{route('prodotto')}}"></a><img src="images/cake/img-cake-7.jpg" alt="">
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
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
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
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail">
                                            <div class="ps-badge"><span>50%</span></div><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-4.jpg" alt="">
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
                                            <p class="ps-product__price"><del> €10.00</del> €5.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
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
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail">
                                            <div class="ps-badge"><span>50%</span></div><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-9.jpg" alt="">
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
                                            <p class="ps-product__price"><del> €10.00</del> €5.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-7.jpg" alt="">
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
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @component(alessioprete_view('frontend.components.sidebar')) @endcomponent
            </div>
        </div>
    </div>
@endsection
