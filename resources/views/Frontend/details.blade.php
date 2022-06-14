<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail</title>
	<base href="../public">
</head>
<body class=" detail page ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	
    @extends('Frontend.layout.main')
    @section('content')
	<!--main area-->
	<main id="main" class="main-site">

		<div class="">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>detail</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">

							  <ul class="slides">
                                  
							    <li data-thumb="{{asset('Admin/Products/'.$product->image)}}">
							    	<img src="{{asset('Admin/Products/'.$product->image)}}" alt="product thumbnail" />
							    </li>
                                
                                
                                @foreach($related as $rel)
                                <li data-thumb="{{asset('Admin/Products/'.$rel->image)}}" >
							    	<img src="{{asset('Admin/Products/'.$rel->image)}}"  alt="product thumbnail" />
							    </li>
                                @endforeach
                                

							  </ul>
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">Radiant-360 R6 Wireless Omnidirectional Speaker [White]</h2>
                            <div class="short-desc">
                                <ul>
                                    <li><h3>{{$product->name}}</h3></li>
                                    <li><h3>{{$product->description}}</h3></li>
                                </ul>
                            </div>
                            
                            <div class="wrap-price"><span class="product-price"><h3>${{$product->selling_price}}</h3></span></div>
                            <div class="stock-info in-stock">
                                <h4 class="availability">Availability: <b>In Stock</b></h4>
                            </div>
                            <div class="quantity">
                            	<h3><span>Quantity:</span></h3>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
							</div>
							<div class="wrap-butons">
								<a href="{{url('add_to_cart/'.$product->id)}}" class="btn add-to-cart"><h4>Add to Cart</h4></a>
                                <div class="wrap-btn">
                                    <a href="#" class="btn btn-compare"><h4>Add Compare</h4></a>
                                    <a href="#" class="btn btn-wishlist"><h4>Add Wishlist</h4></a>
                                </div>
							</div>
						</div>
						<div class="container">
                        <div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
								<a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
								<a href="#review" class="tab-control-item">Reviews</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>{{$product->longdescription}}</p>
								</div>
								<div class="tab-content-item " id="add_infomation">
									<table class="shop_attributes">
										<tbody>
											<tr>
												<th>Weight</th><td class="product_weight">{{$product->weight}} kg</td>
											</tr>
											<tr>
												<th>size</th><td class="product_dimensions">{{$product->size}}</td>
											</tr>
											<tr>
												<th>Color</th><td><p>{{$product->color}}</p></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-content-item " id="review">
									
									<div class="wrap-review-form">
										
										<div id="comments">
											<h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span></h2>
											<ol class="commentlist">
												<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
													<div id="comment-20" class="comment_container"> 
														<img alt="" src="assets/images/author-avata.jpg" height="80" width="80">
														<div class="comment-text">
															<div class="star-rating">
																<span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
															</div>
															<p class="meta"> 
																<strong class="woocommerce-review__author">admin</strong> 
																<span class="woocommerce-review__dash">–</span>
																<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
															</p>
															<div class="description">
																<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
															</div>
														</div>
													</div>
												</li>
											</ol>
										</div><!-- #comments -->

										<div id="review_form_wrapper">
											<div id="review_form">
												<div id="respond" class="comment-respond"> 

													<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
														<p class="comment-notes">
															<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
														</p>
														<div class="comment-form-rating">
															<span>Your rating</span>
															<p class="stars">
																
																<label for="rated-1"></label>
																<input type="radio" id="rated-1" name="rating" value="1">
																<label for="rated-2"></label>
																<input type="radio" id="rated-2" name="rating" value="2">
																<label for="rated-3"></label>
																<input type="radio" id="rated-3" name="rating" value="3">
																<label for="rated-4"></label>
																<input type="radio" id="rated-4" name="rating" value="4">
																<label for="rated-5"></label>
																<input type="radio" id="rated-5" name="rating" value="5" checked="checked">
															</p>
														</div>
														<p class="comment-form-author">
															<label for="author">Name <span class="required">*</span></label> 
															<input id="author" name="author" type="text" value="">
														</p>
														<p class="comment-form-email">
															<label for="email">Email <span class="required">*</span></label> 
															<input id="email" name="email" type="email" value="" >
														</p>
														<p class="comment-form-comment">
															<label for="comment">Your review <span class="required">*</span>
															</label>
															<textarea id="comment" name="comment" cols="45" rows="8"></textarea>
														</p>
														<p class="form-submit">
															<input name="submit" type="submit" id="submit" class="submit" value="Submit">
														</p>
													</form>

												</div><!-- .comment-respond-->
											</div><!-- #review_form -->
										</div><!-- #review_form_wrapper -->

									</div>
								</div>
							</div>
						</div>
                        </div>
					</div>
				</div><!--end main products area-->

				

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">Related Products</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                                @foreach($related as $related)
								<div class="product product-style-2 equal-elem ">
									<div class="product-thumnail">
										<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        
											<figure><img src="{{asset('Admin/Products/'.$related->image)}}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
										<div class="group-flash">
											<span class="flash-item bestseller-label">Bestseller</span>
										</div>
										<div class="wrap-btn">
											<a href="#" class="function-link">quick view</a>
										</div>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
										<div class="wrap-price"><span class="product-price">$250.00</span></div>
									</div>
								</div>
                                @endforeach

							</div>
						</div><!--End wrap-products-->
					</div>
				</div>

			</div><!--end row-->

		</div><!--end container-->

	</main>
    @endsection
	<!--main area-->

</body>
</html>