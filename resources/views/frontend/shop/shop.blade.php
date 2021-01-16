@extends('frontend/layout/layout')

@section('FrontendMainSection')

<section id="advertisement">
    <div class="container">
        <img src="{{asset('frontend_asset')}}/images/shop/advertisement.jpg" alt="" />
    </div>
</section>
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
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>

                    @foreach ($shop_product_item as $item)

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('storage/product').'/'.$item->product_image}}" alt="" />
                                    <h2>${{$item->price}}</h2>
                                    <p>{{$item->product_name}}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>${{$item->price}}</h2>
                                        <p>{{$item->product_name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="{{url('shop/product-details').'/'.$item->product_id}}"><i class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach





                </div><!--features_items-->
                    <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>
            </div>
        </div>
    </div>
</section>

@endsection

