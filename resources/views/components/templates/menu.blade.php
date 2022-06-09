@props(['cartProducts'])
<!-- header -->
<header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="full">
              <div class="topbar-left">
                <ul class="list-inline">
                  <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Pere Perića Street 1, 31000 Osijek </span> </li>
                  <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:franko.vekic@gmail.com">franko.vekic@gmail.com </a></span> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 right_section_header_top">
            <div class="float-left">
              <div class="social_icon">
                <ul class="list-inline">
                  <li><a class="fa fa-facebook" href="https://www.facebook.com/franko.vekic" title="Facebook" target="_blank"></a></li>
                  <li><a class="fa fa-instagram" href="https://www.instagram.com/franko.vekic" title="Instagram" target="_blank"></a></li>
                  <li><a class="fa fa-github" href="https://github.com/FrankoVekic" title="Github" target="_blank"></a></li>
                  <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                  <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                </ul>
              </div>
            </div>
            <div class="float-right">
              <div class="make_appo"> <a class="btn white_btn" href="#">Make Appointment</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <!-- logo start -->
            <div class="logo"> <a href="it_home.html"><img src="{{ env('APP_URL') }}public/images/logos/logo.png" alt="logo" style="size: 500px;" /></a> </div>
            <!-- logo end -->
          </div>
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <!-- menu start -->
            <div class="menu_side">
              <div id="navbar_menu">
                <ul class="first-ul">
                  <li> <a class="active" href="/">Home</a>
                  </li>
                  <li><a href="{{ env('APP_URL') }}news/index">News</a></li>
                  <li> <a href="">Blog</a>
                  </li>
                  <li> <a href="#">Service</a>
                  </li>
                  <li> <a href="">Shop</a>
                    <ul>
                      @unless (Cart::count()==0)
                      <li><a href="{{ env('APP_URL') }}products/shopping_cart">Shopping Cart ({{ Cart::count() }})</a></li>
                      @else
                      <li><a href="{{ env('APP_URL') }}products/shopping_cart">Shopping Cart</a></li>
                      @endunless                     
                      <li><a href="{{ env('APP_URL') }}products/equipment">Equipment</a></li>
                      <li><a href="{{ env('APP_URL') }}products/games">Games</a></li>
                    </ul>
                  </li>
                  <li> <a href="">About Us</a>
                  </li>
                  @auth
                  <li> <a href="{{ env('APP_URL') }}logout">Log Out</a>
                  </li>
                  @else
                  <li> <a href="{{ env('APP_URL') }}login">Log In</a>
                  </li>
                  @endauth                 
                </ul>
              </div>
              <div class="search_icon">
                <ul>
                  <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
    <!-- header bottom end -->
  </header>
  <!-- end header -->