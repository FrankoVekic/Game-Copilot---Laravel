<x-app>
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="title-holder">
                  <div class="title-holder-cell text-left">
                    <h1 class="page-title">Edit Product</h1>
                    <ol class="breadcrumb">
                      <li><a href="/">Home</a></li>
                      <li><a href="{{ env('APP_URL') }}admin-panel/equipment">Manage Equipment</a></li>
                      <li class="active">Edit Product</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section padding_layout_1 checkout_section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="full">
                <div class="tab-info coupon-section">
                  <p>Enter required data.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="checkout-form">
                <form method="POST" action="{{ env('APP_URL') }}admin-panel/service/{{ $service->id }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <fieldset>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-field">
                        <label>Title <span class="red"></span></label>
                        <input class="inputcheckout" placeholder="Enter Service Title." name="title" value="{{ $service->title }}" type="text">
                        @error('title')
                        <p style="color: red; font-size:14px;">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-field">
                        <label>Description <span class="red"></span></label>
                        <input class="inputcheckout" value="{{ $service->description }}" placeholder="Enter Service description." name="description">
                        @error('description')
                        <p style="color: red; font-size:14px;">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-field">
                        <label> Choose a image <span class="red"></span></label>
                        <input class="inputcheckout" value="{{ $service->image }}" name="image" type="file">
                      </div>
                    </div>
                    <div class="center">
                    <button class="btn main_bt" type="submit">Save changes</button>
                    <a href="{{ env('APP_URL') }}admin-panel/service" style="margin-left:10px; background-color:firebrick" class="btn main_bt" type="submit">Back</a>
                  </div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          <!-- SIDE BAR HERE -->
          </div>
        </div>
      </div>
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