@extends('frontend/layout/layout')

@section('FrontendMainSection')
    <section id="slider">

        {{-- @php
        echo "
        <pre>";
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
                                        akhane item gula thakbe; shudhu ai code diyei run kora jete pare kintu akhane shudhu prothom ta active dekhay tarpor gula active thakbe nah,,,, tai  poreer code run korbe
                                            @endforeach
                                            --}}


                                            <?php
                                            $slider_item = DB::table('tbl_slider')
                                                ->where('slider_status', 1)
                                                ->get();
                                            $i = 0;
                                            foreach ($slider_item as $slider)
                                            { $i++;
                                                if ($i == 1) { ?>
                                                <div class="item active">
                                                    <?php } else { ?>
                                                        <div class="item">
                                                  <?php } ?>
                                                    <div class="col-sm-6">
                                                        <h1><span>E</span>-SHOPPER</h1>
                                                        <h2>{{$slider->slider_name}}</h2>
                                                        <p>{{$slider->slider_description}}</p>
                                                        <a name="" id="" class="btn btn-default get" href="{{$slider->btn_link}}" role="button">Get it now</a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img src="{{ asset('storage/slider/'.$slider->slider_image) }}" class="girl img-responsive" alt="" />
                                                        <img src="{{ asset('frontend_asset') }}/images/home/pricing.png" class="pricing"
                                                            alt="" />
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>

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
                                                    <h4 class="panel-title"><a href="{{ url('/product_by_cat_home') . '/' . $list->id }}">{{ $list->name }}</a></h4>
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

                                                    <li><a href="{{ url('/product_by_brand_home') . '/' . $list->id }}"> <span class="pull-right">(50)</span>{{ $list->name }}</a></li>
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
                                    <h2 class="title text-center">Features Items</h2>


                                    @foreach ($feature as $featured_list)

                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ asset('storage/product' . '/' . $featured_list->product_image) }}" alt="" />
                                                    <h2>${{ $featured_list->price }}</h2>
                                                    <p>{{ $featured_list->product_name }}</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <div class="product-overlay">
                                                    <div class="overlay-content">
                                                        <h2>${{ $featured_list->price }}</h2>
                                                        <p>{{ $featured_list->product_name }}</p>


                                                        <form action="{{url('/shop/add-to-cart')}}" method="POST">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="product_quantity" min="1" max="20" value="1"/>
                                                            <input type="hidden" name="product_id" value="{{$featured_list->product_id }}">
                                                            <button type="submit" class="btn btn-fefault cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                Add to cart
                                                            </button>

                                                            </form>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="choose">
                                                <ul class="nav nav-pills nav-justified">
                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                    <li><a href="{{url('/shop/product-details').'/'.$featured_list->product_id}}"><i class="fa fa-plus-square"></i>Product Details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                                <!--features_items-->

                                <div class="category-tab">
                                    <!--category-tab-->
                                    <div class="col-sm-12">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                                            <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                                            <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
                                            <li><a href="#kids" data-toggle="tab">Kids</a></li>
                                            <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tshirt">
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="blazers">
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="sunglass">
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="kids">
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="poloshirt">
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{ asset('frontend_asset') }}/images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/category-tab-->

                                <div class="recommended_items">
                                    <!--recommended_items-->
                                    <h2 class="title text-center">recommended items</h2>

                                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="col-sm-4">
                                                    <div class="product-image-wrapper">
                                                        <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                <img src="{{ asset('frontend_asset') }}/images/home/recommend1.jpg"
                                                                    alt="" />
                                                                <h2>$56</h2>
                                                                <p>Easy Polo Black Edition</p>
                                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="product-image-wrapper">
                                                        <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                <img src="{{ asset('frontend_asset') }}/images/home/recommend2.jpg"
                                                                    alt="" />
                                                                <h2>$56</h2>
                                                                <p>Easy Polo Black Edition</p>
                                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="product-image-wrapper">
                                                        <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                <img src="{{ asset('frontend_asset') }}/images/home/recommend3.jpg"
                                                                    alt="" />
                                                                <h2>$56</h2>
                                                                <p>Easy Polo Black Edition</p>
                                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-sm-4">
                                                    <div class="product-image-wrapper">
                                                        <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                <img src="{{ asset('frontend_asset') }}/images/home/recommend1.jpg"
                                                                    alt="" />
                                                                <h2>$56</h2>
                                                                <p>Easy Polo Black Edition</p>
                                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="product-image-wrapper">
                                                        <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                <img src="{{ asset('frontend_asset') }}/images/home/recommend2.jpg"
                                                                    alt="" />
                                                                <h2>$56</h2>
                                                                <p>Easy Polo Black Edition</p>
                                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="product-image-wrapper">
                                                        <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                <img src="{{ asset('frontend_asset') }}/images/home/recommend3.jpg"
                                                                    alt="" />
                                                                <h2>$56</h2>
                                                                <p>Easy Polo Black Edition</p>
                                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!--/recommended_items-->

                            </div>
                        </div>
                    </div>
                </section>
@endsection
