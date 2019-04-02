@extends('layouts.app')

@section('content')
<!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Новые изделия</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
					
					     @foreach($news as $one)

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('uploads/thumb/'.$one->picture)}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('uploads/'.$one->picture)}}" alt="">
								
								<!-- Product Badge -->
										@if($one->procent!=NULL)
                                        <div class="product-badge offer-badge">
                                            <span>-{{$one->procent}}%</span>
                                        </div>
										@endif
								
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>{{$one->catalog_id}}</span>
                                <a href="single-product-details.html">
                                    <h6>{{$one->name}}</h6>
                                </a>
								
								@if($one->procent!=NULL)
											<p class="product-price"><span class="old-price">{{$one->price}} РУБ.</span> <?=(int)$one->price-((int)$one->price*(int)$one->procent/100)?> РУБ.</p>
											@else
												<p class="product-price">{{$one->price}} РУБ.</p>
									    
									@endif

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						@endforeach

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(media/img/bg-img/bg-22.png);">
                        <div class="catagory-content">
                            <a href="#">Женские</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(media/img/bg-img/bg-33.jpg);">
                        <div class="catagory-content">
                            <a href="#">Мужские</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(media/img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="#">Умные</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(media/img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Распродажа</h2>
                                <a href="#" class="btn essence-btn">Просмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->
@endsection