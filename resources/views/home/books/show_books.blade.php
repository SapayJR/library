@extends('home.layouts.front_layout')

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/front/styles/product.css">
    <link rel="stylesheet" type="text/css" href="/front/styles/product_responsive.css">
@endsection
@section('custom_js')
    <script src="/front/js/product.js"></script>
@endsection

@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(images/categories.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Smart Phones<span>.</span></div>
                                <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis
                                        fermentum luctus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large"><img src="/images/leather-book-preview.png" alt="">
                            {{--                            <div class="product_extra product_new"><a href="categories.html">{{ $item->category->title }}</a></div>--}}
                        </div>

                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name">{{$item->title}}</div>
                        <div class="details_price">{{$item->price}} сум</div>

                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Опубликовано : {{ $item->publish_date ?? 'Not published' }}</div>
                            <span></span>
                        </div>
                        <div class="details_text">
                            <p>

                            </p>
                        </div>

                        <!-- Product Quantity -->
                        <div class="product_quantity_container">
                            <div class="product_quantity clearfix">
                                <span>Qty</span>
                                <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                            class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="button cart_button"><a href="#">Добавить в корзинку </a></div>
                        </div>

                        <!-- Share -->
                        <div class="details_share">
                            <span>Share:</span>
                            <ul>
                                <li><a href="https://www.instagram.com/babycomfort_uz/"><i class="fa fa-instagram"
                                                                                           aria-hidden="true"></i></a>
                                </li>
                                <li><a href="https://t.me/babycomfort_uz"><i class="fa fa-telegram"
                                                                             aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Описание</div>
                        <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
                    </div>
                    <div class="description_text">
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <!-- Products -->--}}

    {{--    <div class="products">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col text-center">--}}
    {{--                    <div class="products_title">Related Products</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col">--}}

    {{--                    <div class="product_grid">--}}
    {{--                    @foreach($products as $product)--}}
    {{--                        <!-- Product -->--}}
    {{--                        <div class="product">--}}
    {{--                            <div class="product_image"><img src="{{$product->image}}" alt="{{ $product->title }}"></div>--}}
    {{--                            <div class="product_extra product_new"><a href="categories.html">New</a></div>--}}
    {{--                            <div class="product_content">--}}
    {{--                                <div class="product_title"><a href="{{route('showProduct',['category',$product->id])}}">{{ $product->title }}</a></div>--}}
    {{--                                <div class="product_price">{{ $product->price }} сум</div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection
