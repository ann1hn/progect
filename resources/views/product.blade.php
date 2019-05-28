@extends('layouts.app')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
                <img src="{{asset('uploads/'.$obj->picture)}}" alt="">
         

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>{{$obj->catalog_id}}</span>
            <a href="cart.html">
                <h2>{{$obj->name}}</h2>
            </a>
           <!-- <p class="product-price"><span class="old-price">{{$obj->price}}</span> $49.00</p> -->
            
		@if($obj->procent!=NULL)
				<p class="product-price"><span class="old-price">{{$obj->price}} РУБ.</span> <?=(int)$obj->price-((int)$obj->price*(int)$obj->procent/100)?> РУБ.</p>
			@else
				<p class="product-price">{{$obj->price}} РУБ.</p>
		@endif
		
			<p class="product-desc">{!!$obj->body!!}</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                    
                </div>
            </form>
        </div>
    </section>
    
@endsection