@extends(alessioprete_view('frontend.layouts.base'))

@section('content')
    @component(alessioprete_view('frontend.components.header'))@endcomponent
    <div class="ps-section--hero">
        <img src="{{asset('images/categorie/01_alessio.jpg')}}" alt="">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">{{$categoria->name ?? ''}}</h3>
            <div class="ps-breadcrumb" style="color: white;">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    @php
                        $segments = '';
                        foreach (Request::segments() as $segment) {
                            $segments .= '/'.$segment;
                            echo '<li><a href="'.$segments.'">'.$segment.'</a></li>';
                        }
                    @endphp
                </ol>
            </div>
        </div>
    </div>
    <div class="ps-section--page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                    <div class="ps-shop-listing pt-80 pb-40">
                        <div class="ps-shop-features">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 "><img class="mb-30" src="{{asset('packages/alessioprete/images/product-banner/012x.jpg')}}" alt="">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 "><img class="mb-30" src="{{asset('packages/alessioprete/images/product-banner/022x.jpg')}}" alt="">
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
                                        <li><a href="{{route('categoriegriglia')}}"><i class="fa fa-th"></i></a></li>
                                        <li class="active"><a href="{{route('categorie')}}"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-shop">
                            <div class="ps-product--list ps-product--list-large">
                                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="{{route('prodotto')}}"></a><img src="packages/alessioprete/images/cake/img-cake-2.jpg" alt="">
                                    <div class="ps-badge"><span>50%</span></div>
                                </div>
                                <div class="ps-product__content">
                                    <h4 class="ps-product__title"><a href="product-detail.html">Red sugar flower</a></h4>
                                    <select class="ps-rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p class="ps-product__price">
                                        <del>€25.00</del>€15.00
                                    </p>
                                    <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.</p>
                                    <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm" href="cart.html">ORDINA<i class="fa fa-angle-right"></i></a>
                                        <ul class="ps-product__action">
                                            <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                            <div class="ps-product--list ps-product--list-large">
                                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/cake/img-cake-3.jpg" alt="">
                                    <div class="ps-badge"><span>50%</span></div>
                                </div>
                                <div class="ps-product__content">
                                    <h4 class="ps-product__title"><a href="product-detail.html">Cupcake Queen</a></h4>
                                    <select class="ps-rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p class="ps-product__price">
                                        <del>€25.00</del>€15.00
                                    </p>
                                    <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.</p>
                                    <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm" href="cart.html">ORDINA<i class="fa fa-angle-right"></i></a>
                                        <ul class="ps-product__action">
                                            <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                            <div class="ps-product--list ps-product--list-large">
                                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/cake/img-cake-4.jpg" alt="">
                                    <div class="ps-badge"><span>50%</span></div>
                                </div>
                                <div class="ps-product__content">
                                    <h4 class="ps-product__title"><a href="product-detail.html">Cupcake Glory</a></h4>
                                    <select class="ps-rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p class="ps-product__price">
                                        <del>€25.00</del>€15.00
                                    </p>
                                    <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.</p>
                                    <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm" href="cart.html">ORDINA<i class="fa fa-angle-right"></i></a>
                                        <ul class="ps-product__action">
                                            <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                            <div class="ps-product--list ps-product--list-large">
                                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/cake/img-cake-5.jpg" alt="">
                                    <div class="ps-badge"><span>50%</span></div>
                                </div>
                                <div class="ps-product__content">
                                    <h4 class="ps-product__title"><a href="product-detail.html">Red sugar flower</a></h4>
                                    <select class="ps-rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p class="ps-product__price">
                                        <del>€25.00</del>€15.00
                                    </p>
                                    <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.</p>
                                    <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm" href="cart.html">ORDINA<i class="fa fa-angle-right"></i></a>
                                        <ul class="ps-product__action">
                                            <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                            <div class="ps-product--list ps-product--list-large">
                                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/cake/img-cake-6.jpg" alt="">
                                    <div class="ps-badge"><span>50%</span></div>
                                </div>
                                <div class="ps-product__content">
                                    <h4 class="ps-product__title"><a href="product-detail.html">Cupcake Queen 2</a></h4>
                                    <select class="ps-rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p class="ps-product__price">
                                        <del>€25.00</del>€15.00
                                    </p>
                                    <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.</p>
                                    <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm" href="cart.html">ORDINA<i class="fa fa-angle-right"></i></a>
                                        <ul class="ps-product__action">
                                            <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                            <div class="ps-product--list ps-product--list-large">
                                <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="packages/alessioprete/images/cake/img-cake-1.jpg" alt="">
                                    <div class="ps-badge"><span>50%</span></div>
                                </div>
                                <div class="ps-product__content">
                                    <h4 class="ps-product__title"><a href="product-detail.html">Cupcake Glory 2</a></h4>
                                    <select class="ps-rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p class="ps-product__price">
                                        <del>€25.00</del>€15.00
                                    </p>
                                    <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.</p>
                                    <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm" href="cart.html">ORDINA<i class="fa fa-angle-right"></i></a>
                                        <ul class="ps-product__action">
                                            <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                        </ul>
                                    </footer>
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
                <x-sidebar :categorie="$categorie"></x-sidebar>
{{--                @component(alessioprete_view('frontend.components.sidebar')) @endcomponent--}}
            </div>
        </div>
    </div>
@endsection
