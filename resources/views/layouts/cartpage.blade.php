@extends('layouts.front')
@section('container')
<div class="site-content">
    <main class="site-main  main-container no-sidebar">
        <div class="container">
            <div class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin">
                        <a href="{{url('/')}}">
								<span>
									Home
								</span>
                        </a>
                    </li>
                    <li class="trail-item trail-end active">
							<span>
								Keranjang Belanja
							</span>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="main-content-cart main-content col-sm-12">
                    <h3 class="custom_blog_title">
                        Keranjang Belanja
                    </h3>
                    <div class="page-main-content">
                        <div class="shoppingcart-content">
                            <form action="shoppingcart.html" class="cart-form">
                                <table class="shop_table">
                                    <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"></th>
                                        <th class="product-price"></th>
                                        <th class="product-quantity"></th>
                                        <th class="product-subtotal"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php 
                                        $total = 0 
                                    @endphp
                                    @foreach((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        <tr class="cart_item" data-id="{{ $id }}">
                                            <td class="product-remove remove-from-cart">
                                                <a href="#" class="remove"></a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="{{asset('teamo/images/cart-item-2.jpg')}}" alt="img"
                                                        class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                </a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="#" class="title">{{ $details['name'] }}</a>
                                                {{-- <span class="attributes-select attributes-color">Black,</span>
                                                <span class="attributes-select attributes-size">XXL</span> --}}
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <div class="control">
                                                        <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                        <input type="text" data-step="1" data-min="0" value="{{ $details['quantity'] }}" title="Qty"
                                                            class="input-qty qty update-cart" size="4">
                                                        <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">
                                                                <small>Harga:</small> 
                                                            </span>
                                                            @currency($details['price'])
                                                        </span>
                                            </td>
                                            <td class="product-price" data-title="SubPrice" >
                                                <span class="woocommerce-Price-amount amount sub">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        <small>Subtotal:</small> 
                                                    </span>
                                                    @currency($details['price'] * $details['quantity'] )
                                                </span>
                                            </td>
                                        </tr>
                                    
                                    @endforeach
                                    <tr>
                                        <td class="actions">
                                            {{-- <div class="coupon">
                                                <label class="coupon_code">Coupon Code:</label>
                                                <input type="text" class="input-text" placeholder="Promotion code here">
                                                <a href="#" class="button"></a>
                                            </div> --}}
                                            <div class="order-total">
														<span class="title">
															Total Price:
														</span>
                                                <span class="total-price">
															@currency($total)
														</span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="control-cart">
                                <a class="button btn-continue-shopping" href="{{ URL::previous() }}">
                                    Kembali Belanja
                                </a>
                                <a class="button btn-cart-to-checkout" href="{{url('/checkout')}}">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

@section('script')
<script>
$(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".qty").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
    
    });
</script>
@endsection