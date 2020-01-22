@extends('layouts.base')

@section('container')

<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th class="cart-romove item">Remove</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					<th class="cart-edit item">Edit</th>
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Subtotal</th>
					<th class="cart-total last-item">Grandtotal</th>
				</tr>
			</thead><!-- /thead -->
			<tfoot>
				<tr> 
					<td colspan="7">
						<div class="shopping-cart-btn">
							<span class="">
								<a href="{{route('post.index')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
								<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
			<tbody>
				<div class="hidden">{{$var = 0}}</div>
				@foreach($carts as $cart)
				<tr>
					<div class="hidden">{{$var = $var + $cart->post->price}}</div>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>

						@foreach($photos as $photo)

	        			@if($photo->post_id == $cart->post_id)
							<td class="cart-image">
								<a class="entry-thumbnail" href="#">
								    <img src="{{ asset('storage/' . $photo->path)}}" alt="" height="200px" width="150px">
								</a>
							</td>
						@endif
						@endforeach					

					<td class="cart-product-name-info">
						<h4 class="cart-product-description"><a href="detail.html">{{$cart->post->title}}</a></h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="rating rateit-small rateit"><button id="rateit-reset-2" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-2" style="display: none;"></button><div id="rateit-range-2" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;"><div class="rateit-selected" style="height: 14px; width: 56px;"></div><div class="rateit-hover" style="height:14px"></div></div></div>
							</div>
							<div class="col-sm-8">
								<div class="reviews">
									
								</div>
							</div>
						</div><!-- /.row -->
						<div class="cart-product-info">
											
						</div>
					</td>
					<td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
					<td class="cart-product-quantity">
						<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="1">
			              </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">${{$cart->post->price}}</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price">${{$cart->post->price - $cart->post->price/10}}</span></td>
				</tr>
				<div class="hidden">  {{$cart->total = $var}}  </div>
				@endforeach
				
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->				
<div class="col-md-4 col-sm-12 estimate-ship-tax">

</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 estimate-ship-tax">
	
</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead>
			<tr>
				<th>
					<div class="cart-sub-total">
						Subtotal<span class="inner-left-md">${{$var}} </span>
					</div>
					<div class="cart-grand-total">
						Grand Total<span class="inner-left-md">${{$var-$var/10}} </span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="cart-checkout-btn pull-right">
							<button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
							<span class="">Checkout with multiples address!</span>
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.cart-shopping-total -->			</div>

@stop