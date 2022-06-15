<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping Cart</title>
	<base href="../public">
</head>
<body class=" shopping-cart page ">
	
@extends('Frontend.layout.main')
    @section('content')
	
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            <h3 class="text-center">{{ session('status') }}</h3>
        </div>
    @endif

	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
                        @foreach($cart as $cart)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{asset('Admin/Products/'.$cart->products->image)}}" alt=""></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="{{url('/detail/'.$cart->product_id)}}">{{$cart->products->name}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">${{$cart->products->selling_price}}</p></div>
							<div class="quantity">
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="{{$cart->product_qty}}" data-max="120" pattern="[0-9]*" >									
									<a class="btn btn-increase" href="#"></a>
									<a class="btn btn-reduce" href="#"></a>
								</div>
							</div>
                            @php  $mintotal = $cart->product_qty*$cart->products->selling_price;  @endphp
							<div class="price-field sub-total"><p class="price">${{$mintotal}}</p></div>
							<div class="delete">
								<a href="{{url('delete_cart_item/'.$cart->id)}}" >
									
									<h3><i class="fa fa-times-circle" ></i></h3>
								</a>
							</div>
						</li>
						@endforeach											
					</ul>
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">$512.00</b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">$512.00</b></p>
					</div>
					<div class="checkout-info">
						<label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
						</label>
						<a class="btn btn-checkout" href="checkout.html">Check out</a>
						<a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#">Clear Shopping Cart</a>
						<a class="btn btn-update" href="#">Update Shopping Cart</a>
					</div>
				</div>

				

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->
@endsection
</body>
</html>