@extends('frontend/layout/layout')

@section('FrontendMainSection')
{{-- @php
    echo "<pre>";
    print_r($products);
    die();
@endphp --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @php
                            $result = DB::table('tbl_category')
                            ->where('status', 1)
                            ->get();
                            @endphp
                            @foreach ($result as $list)

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="{{url('/product_by_cat_home').'/'.$list->id}}">{{ $list->name }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
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

                                    <li><a href="{{url('/product_by_brand_home').'/'.$list->id}}"> <span class="pull-right">(50)</span>{{ $list->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                             <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                             <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{asset('frontend_asset')}}/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{asset('/storage/product').'/'.$products[0]->product_image}}" alt="" />
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                              <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar1.jpg" alt=""></a>
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar2.jpg" alt=""></a>
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar1.jpg" alt=""></a>
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar2.jpg" alt=""></a>
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar1.jpg" alt=""></a>
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar2.jpg" alt=""></a>
                                      <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/similar3.jpg" alt=""></a>
                                    </div>

                                </div>

                              <!-- Controls -->
                              <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="{{asset('frontend_asset')}}/images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2>{{$products[0]->product_name}}</h2>
                            <p>Web ID: 1089772</p>
                            <img src="{{asset('frontend_asset')}}/images/product-details/rating.png" alt="" />
                            <span>
                                <span>US ${{$products[0]->price}}</span>

                        <form action="{{url('/shop/add-to-cart')}}" method="POST">
                                    {{ csrf_field() }}
                                    
                                <label>Quantity:</label>
                                <input type="number" name="product_quantity" min="1" max="20" value="1"/>
                                <input type="hidden" name="product_id" value="{{$products[0]->product_id }}">
                                <button type="submit" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                        </form>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> {{$products[0]->name}}</p>
                            <a href=""><img src="{{asset('frontend_asset')}}/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#long_details" data-toggle="tab">Details</a></li>
                            <li><a href="#short_details" data-toggle="tab">Short Details</a></li>
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="long_details" >
                            {{$products[0]->product_long_description}}
                        </div>
                        <div class="tab-pane fade" id="short_details" >
                            {{$products[0]->product_short_description}}
                        </div>


                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p><b>Write Your Review</b></p>

                                <form action="#">
                                    <span>
                                        <input type="text" placeholder="Your Name"/>
                                        <input type="email" placeholder="Email Address"/>
                                    </span>
                                    <textarea name="" ></textarea>
                                    <b>Rating: </b> <img src="{{asset('frontend_asset')}}/images/product-details/rating.png" alt="" />
                                    <button type="button" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('frontend_asset')}}/images/home/recommend1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('frontend_asset')}}/images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('frontend_asset')}}/images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
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
                                                <img src="{{asset('frontend_asset')}}/images/home/recommend1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('frontend_asset')}}/images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('frontend_asset')}}/images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
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
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>

@endsection

