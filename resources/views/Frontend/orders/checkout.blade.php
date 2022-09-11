<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CheckOut</title>
	
</head>
<body class=" checkout page ">
@extends('Frontend.layout.main')
    @section('content')
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
				<div class="wrap-address-billing">
					<h3 class="box-title">Billing Address</h3>
					<form action="#" method="get" name="frm-billing">
						<p class="row-in-form">
							<label for="fname">first name<span>*</span></label>
							<input id="fname" type="text" name="fname" value="" placeholder="Your name">
						</p>
						<p class="row-in-form">
							<label for="lname">last name<span>*</span></label>
							<input id="lname" type="text" name="lname" value="" placeholder="Your last name">
						</p>
						<p class="row-in-form">
							<label for="email">Email Addreess:</label>
							<input id="email" type="email" name="email" value="" placeholder="Type your email">
						</p>
						<p class="row-in-form">
							<label for="phone">Phone number<span>*</span></label>
							<input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
						</p>
						<p class="row-in-form">
							<label for="add">Address:</label>
							<input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
						</p>
						<p class="row-in-form">
							<label for="country">Country<span>*</span></label>
							<input id="country" type="text" name="country" value="" placeholder="United States">
						</p>
						<p class="row-in-form">
							<label for="zip-code">Postcode / ZIP:</label>
							<input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
						</p>
						<p class="row-in-form">
							<label for="city">Town / City<span>*</span></label>
							<input id="city" type="text" name="city" value="" placeholder="City name">
						</p>
						<p class="row-in-form fill-wife">
							<label class="checkbox-field">
								<input name="create-account" id="create-account" value="forever" type="checkbox">
								<span>Create an account?</span>
							</label>
							<label class="checkbox-field">
								<input name="different-add" id="different-add" value="forever" type="checkbox">
								<span>Ship to a different address?</span>
							</label>
						</p>
					</form>
				</div>
				<div class="summary summary-checkout">
					<div class="row">
						<div class="col-md-6">
							<div class="summary-item payment-method">
								<h4 class="title-box">Payment Method</h4>
								<p class="summary-info"><span class="title">Check / Money order</span></p>
								<p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
								<div class="choose-payment-methods">
									<label class="payment-method">
										<input name="payment-method" id="payment-method-bank" value="bank" type="radio">
										<span>Direct Bank Transder</span>
										<span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
									</label>
									<label class="payment-method">
										<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
										<span>visa</span>
										<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
									</label>
									<label class="payment-method">
										<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
										<span>Paypal</span>
										<span class="payment-desc">You can pay with your credit</span>
										<span class="payment-desc">card if you don't have a paypal account</span>
									</label>
								</div>
								<!-- <a href="thankyou.html" class="btn btn-medium">Place order now</a> -->
							</div>
						</div>
						<!-- <div class="col-md-4">
							<div class="summary-item shipping-method">
								<h4 class="title-box f-title">Shipping method</h4>
								<p class="summary-info"><span class="title">Flat Rate</span></p>
								<p class="summary-info"><span class="title">Fixed $50.00</span></p>
								<h4 class="title-box">Discount Codes</h4>
								<p class="row-in-form">
									<label for="coupon-code">Enter Your Coupon code:</label>
									<input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
								</p>
								<a href="#" class="btn btn-small">Apply</a>
							</div>
						</div> -->
						<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h4>Order Details</h4>
								<hr>
								<?php $total = 0; ?>
									<table class="table table-checkout shadow">
										<tbody>
										<th>Name</th>
										<th>Qty</th>
										<th>Selling_price</th>
										@foreach($cartitem as $item)
											<tr>                                      
												<td>{{$item->products->name}}</td>
												<td>{{$item->product_qty}}</td>
												<td>{{$item->products->selling_price}}</td>
											</tr>
											@php  $total += $item->product_qty * $item->products->selling_price  @endphp
										@endforeach
										</tbody>
										
									</table>
									<h3 class="text-center">Grand Total <b>   {{$total}}$</b></h3>
								
							</div>
							@if($cartitem->count() > 0)
							<input type="submit" class="btn btn-primary text-center  mb-2" style="width:400px; margin-left: 100px;" value="Place Order">
							@else
								<div class="card-body text-center">
									<h4>Your cart is empty </h4>
								</div>
							@endif
						</div>
						</div>
					</div>
					
					
				</div>
			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->

@endsection
</body>
</html>