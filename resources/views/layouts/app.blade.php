<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	
    <!-- Title  -->
    <title> Интернет-магазин часов "8 o'clock" </title>

    <!-- Favicon  -->
	<link href="{{asset('media/img/core-img/favicon.ico')}}" rel="icon" />

    <!-- Core Style CSS -->
	<link href="{{asset('media/scss/style.scss')}}" rel="stylesheet" />
	<link href="{{asset('media/css/core-style.css')}}" rel="stylesheet" />
	<link href="{{asset('media/css/style1.css')}}" rel="stylesheet" />
	
</head>
<body id="app-layout">
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{asset('/')}}"><img src="{{asset('media/img/logoo.png')}}" alt="_____________"></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Магазин</a	>					
                                <div class="megamenu">
							           @foreach ($v_catalogs as $catalog)
									    <ul class="single-mega cn-col-4">
                                        <li class="title"><a href="{{asset('catalog/'.$catalog->id)}}" class="list-group-item" >
                              {{$catalog->name}}
                          </a></li>
                                    </ul>
                        
                             @endforeach	
                                   
                                 
                                </div>
                            </li>
                            
                            <li><a href="{{asset('page')}}">Контакты</a></li>
							<li><a href="#">О нас</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Нажмите для поиска">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="{{asset('media/img/core-img/heart.svg')}}" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="{{asset('login')}}"><img src="{{asset('media/img/core-img/user.svg')}}" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="{{asset('media/img/core-img/bag.svg')}}" alt=""> <span>{{$count}}</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="{{asset('media/img/core-img/bag.svg')}}" alt=""> <span>{{$count}}</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
			
                <!-- Single Cart Item -->
				
				@foreach($arr as $key=>$obj)
                <div class="single-cart-item">
                    <a href="{{asset('sproduct')}}" class="product-image">
                        <img src="{{asset('uploads/thumb/' .$obj->picture)}}" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">{{$obj->name}}</span>
                           
  
                            <p class="price">{{$obj->price}} РУБ.</p>
                        </div>
                    </a>
                </div>
				@endforeach
         
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Заказано</h2>
                <ul class="summary-table">
                    <li><span>На сумму:</span> <span>$274.00</span></li>
                    <li><span>Доставка:</span> <span>Бесплатно</span></li>
                    <li><span>Скидки:</span> <span>-15%</span></li>
                    <li><span>Итого:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->
	
	@yield('content')
      

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            

            

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
           
			
			
			
			
        </div>
		
    </nav>

	
	
   
  
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('media/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('media/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('media/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('media/js/plugins.js')}}"></script>
    <!-- Classy Nav js -->
    <script src="{{asset('media/js/classy-nav.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('media/js/active.js')}}"></script>
	
</body>
</html>
