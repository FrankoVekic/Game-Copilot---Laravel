<x-app>
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Shopping Cart</h1>
                <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Shopping Cart</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <div class="section padding_layout_1 Shopping_cart_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="product-table">
            <table class="table">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">Total</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>      
                @unless (count($cartProducts)==0)
                  @foreach ( $cartProducts as $product )
                  <x-shopping-cart.cart-item :product="$product"/>
                  @endforeach  
                @else 
                  <p>Cart is empty</p>
                @endunless                      
              </tbody>
            </table>
            <div class="shopping-cart">
            <table class="table">
              <tbody>
                <tr class="cart-form">
                  <td class="actions"><div class="coupon">
                      <input name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code" type="text">
                      <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                    </div>
                    <input class="button" name="update_cart" value="Update cart" disabled="" type="submit">
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
          <div class="shopping-cart-cart">
            <div class="shopping-cart">
            <table>
              <tbody>
                <tr class="head-table">
                  <td><h5>Cart Totals</h5></td>
                  <td class="text-right"></td>
                </tr>
                <x-shopping-cart.subtotal :subtotal="$cartSubtotal"/>
                <x-shopping-cart.shipping :shipping="$shipping"/>
                <x-shopping-cart.total :total="$newTotal"/>
                <tr>
                  <td><button type="button" class="button">Continue Shopping</button></td>
                  <td><button class="button">Checkout</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
 <!-- section -->
 <div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">What Clients Say?</h2>
            <p class="large">Here are testimonials from clients..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! I was pleasantly surprised that they did the repair of my computer in a very short time. </div>
                  <div class="testimonial-photo"> <img src="{{ env('APP_URL') }}public/images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Elon Musk</h4>
                    <span class="testimonial-position">CEO of SpaceX</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                    I am really satisfied with my first laptop service. </div>
                  <div class="testimonial-photo"> <img src="{{ env('APP_URL') }}public/images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Jeff Bezos</h4>
                    <span class="testimonial-position">American entrepreneur</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys are great! Fast delivery of services. I ordered 50 games that arrived to me within 2 days, very fast delivery. Thank you guys a lot. </div>
                  <div class="testimonial-photo"> <img src="{{ env('APP_URL') }}public/images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Mate Rimac</h4>
                    <span class="testimonial-position">Croatian innovator</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="{{ env('APP_URL') }}public/images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
</div>
<!-- end section -->
</x-app>