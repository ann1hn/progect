@extends('layouts.app')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2> {{$cat->name}} </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30"> Категории</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
								
								@foreach ($v_catalogs as $catalog)
									    
                                        <li><a href="{{asset('catalog/'.$catalog->id)}}" class="list-group-item" >
                              {{$catalog->name}}
							 </a> </li>
							  @endforeach
							  
                                    
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Фильтр по</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Цене</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Range: $49.00 - $360.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                       
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p>Продуктов найдено: <span>{{$products->count()}}</span></p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

						@foreach($products as $one)
						
                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{asset('uploads/thumb/'.$one->picture)}}" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="{{asset('uploads/thumb/'.$one->picture)}}" alt="">

                                        <!-- Product Badge -->
										@if($one->procent!=NULL)
                                        <div class="product-badge offer-badge">
                                            <span>-{{$one->procent}}%</span>
                                        </div>
										@endif
                                        <!-- Favourite -->
                                        
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>{{$one->catalog_id}}</span>
                                        <a href="{{asset('product/'.$one->id)}}">
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
                                                <a href="{{asset('basket/add/' .$one->id)}}" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
    
@endsection