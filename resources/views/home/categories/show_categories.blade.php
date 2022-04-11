@extends('home.layouts.front_layout')

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/front/styles/categories.css">
    <link rel="stylesheet" type="text/css" href="/front/styles/categories_responsive.css">
@endsection


@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(/public/images/categories.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">{{ $cat->title }}<span>.</span></div>
                                <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Showing <span></span> results</div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Сортировать</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn" data-order="default"><span>По умолчанию</span></li>
                                            <li class="product_sorting_btn" data-order="price-low-high"><span>Дешевле</span></li>
                                            <li class="product_sorting_btn" data-order="price-high-low"><span>Дороже</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

                        @foreach($books as $book)
                            <div class="product">
                                <div class="product_image"><img src="/images/leather-book-preview.png" alt="{{ $book->title }}"></div>
                                {{--                        <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>--}}
                                <div class="product_content">
                                    <div class="product_title"><a href="{{ route('showBook', $book->id) }}">{{ $book->title }}</a></div>
                                    <div class="product_price">{{ $book->price }} сум</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('custom_js')

@endsection
