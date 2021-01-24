@extends('frontend/layout/layout')
@section('FrontendMainSection')



<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div>
        <!--/breadcrums-->

        <div class="shopper-informations">
                <div class="col-sm-12">
                    <div class="bill-to">
                        <p>Bill To</p>
                        <div class="form-one">
                            <form action="" method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <input type="text" placeholder="First Name *">
                                            <input type="text" placeholder="Last Name *">
                                            <input type="text" placeholder="Email*">
                                            <input type="text" placeholder="Mobile Number*">
                                            <input type="text" placeholder="Address*">
                                            <input type="text" placeholder="City">
                                        </tr>
                                        <tr>
                                            <div class="order-message">
                                                <p>Shipping Order</p>
                                                <textarea name="message"
                                                    placeholder="Notes about your order, Special Notes for Delivery"
                                                    rows="16"></textarea>
                                                <label><input type="checkbox"> Shipping to bill address</label>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="payment-options">
                                    <span>
                                        <label><input type="checkbox"> Direct Bank Transfer</label>
                                    </span>
                                    <span>
                                        <label><input type="checkbox"> Check Payment</label>
                                    </span>
                                    <span>
                                        <label><input type="checkbox"> Paypal</label>
                                    </span>
                                </div>
                                <button type="button" name="payment" id="payment"
                                    class="btn btn-success btn-lg btn-block">Payment</button>
                            </form>
                        </div>
                    </div>
                </div>

        </div>
        <div class="review-payment">
            <h2>Review & Payment</h2>
        </div>

        {{-- <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{ asset('frontend_asset') }}/images/cart/one.png"
        alt=""></a>
        </td>
        <td class="cart_description">
            <h4><a href="">Colorblock Scuba</a></h4>
            <p>Web ID: 1089772</p>
        </td>
        <td class="cart_price">
            <p>$59</p>
        </td>
        <td class="cart_quantity">
            <div class="cart_quantity_button">
                <a class="cart_quantity_up" href=""> + </a>
                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                <a class="cart_quantity_down" href=""> - </a>
            </div>
        </td>
        <td class="cart_total">
            <p class="cart_total_price">$59</p>
        </td>
        <td class="cart_delete">
            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
        </td>
        </tr>

        <tr>
            <td class="cart_product">
                <a href=""><img src="{{ asset('frontend_asset') }}/images/cart/two.png" alt=""></a>
            </td>
            <td class="cart_description">
                <h4><a href="">Colorblock Scuba</a></h4>
                <p>Web ID: 1089772</p>
            </td>
            <td class="cart_price">
                <p>$59</p>
            </td>
            <td class="cart_quantity">
                <div class="cart_quantity_button">
                    <a class="cart_quantity_up" href=""> + </a>
                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off"
                        size="2">
                    <a class="cart_quantity_down" href=""> - </a>
                </div>
            </td>
            <td class="cart_total">
                <p class="cart_total_price">$59</p>
            </td>
            <td class="cart_delete">
                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
            </td>
        </tr>
        <tr>
            <td class="cart_product">
                <a href=""><img src="{{ asset('frontend_asset') }}/images/cart/three.png" alt=""></a>
            </td>
            <td class="cart_description">
                <h4><a href="">Colorblock Scuba</a></h4>
                <p>Web ID: 1089772</p>
            </td>
            <td class="cart_price">
                <p>$59</p>
            </td>
            <td class="cart_quantity">
                <div class="cart_quantity_button">
                    <a class="cart_quantity_up" href=""> + </a>
                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off"
                        size="2">
                    <a class="cart_quantity_down" href=""> - </a>
                </div>
            </td>
            <td class="cart_total">
                <p class="cart_total_price">$59</p>
            </td>
            <td class="cart_delete">
                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
            </td>
        </tr>
        <tr>
            <td colspan="4">&nbsp;</td>
            <td colspan="2">
                <table class="table table-condensed total-result">
                    <tr>
                        <td>Cart Sub Total</td>
                        <td>$59</td>
                    </tr>
                    <tr>
                        <td>Exo Tax</td>
                        <td>$2</td>
                    </tr>
                    <tr class="shipping-cost">
                        <td>Shipping Cost</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><span>$61</span></td>
                    </tr>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </div> --}}

    </div>
</section>




@endsection
