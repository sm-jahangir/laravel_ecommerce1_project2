@extends('frontend/layout/layout')

@section('FrontendMainSection')
    <section id="slider">

 {{-- @php
      echo "<pre>";
        print_r($result);

        die();
@endphp --}}


        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            {{--

                            @php
                               $slider_item = DB::table('tbl_slider')->where('slider_status',1)->get();
                            @endphp
                            @foreach ($slider_item as $item)
                            akhane item gula thakbe;
                                @endforeach
                                --}}
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('frontend_asset') }}/images/home/girl1.jpg"
                                        class="girl img-responsive" alt="" />
                                    <img src="{{ asset('frontend_asset') }}/images/home/pricing.png" class="pricing"
                                        alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('frontend_asset') }}/images/home/girl2.jpg"
                                        class="girl img-responsive" alt="" />
                                    <img src="{{ asset('frontend_asset') }}/images/home/pricing.png" class="pricing"
                                        alt="" />
                                </div>
                            </div>


                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">

                            <!--category-productsr-->
                            @php
                            $result = DB::table('tbl_category')
                            ->where('status', 1)
                            ->get();
                            @endphp
                            @foreach ($result as $list)

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="{{url('/product_by_brand_home').'/'.$list->id}}">{{ $list->name }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">

                                    <!--category-productsr-->
                                    @php
                                    $result = DB::table('tbl_brand')
                                    ->where('status', 1)
                                    ->get();
                                    @endphp
                                    @foreach ($result as $list)

                                        <li><a href="{{url('product_by_brand_home').'/'.$list->id}}"> <span class="pull-right">(50)</span>{{ $list->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--/brands_products-->

                        <div class="price-range">
                            <!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                    data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div>
                        <!--/price-range-->

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="{{ asset('frontend_asset') }}/images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Product By {{$result[1]->name}}</h2>


                        @foreach ($brandproduct as $product_by_brand)

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('storage/product'.'/'.$product_by_brand->product_image) }}" alt="" />
                                        <h2>${{$product_by_brand->price}}</h2>
                                        <p>{{$product_by_brand->product_name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>${{$product_by_brand->price}}</h2>
                                            <p>{{$product_by_brand->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <!--features_items-->

                </div>
            </div>
        </div>
    </section>
@endsection
