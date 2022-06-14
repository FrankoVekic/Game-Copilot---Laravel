<x-app>
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Blog List</h1>
                <ol class="breadcrumb">
                  <li><a href="">Home</a></li>
                  <li class="active">Blog List</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section padding_layout_1 blog_list">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
          <div class="full">
            {{-- if user is logged in 
            <div class="center" style="margin-bottom: 20px;">
              <a href="" class="btn main_bt" type="submit">Add New Blog</a>
            </div>
             endif --}}
            {{-- unless blogs are null --}}
            {{-- start foreach --}}
            @foreach ($blogs as $blog )
                <x-blogs.blog-card :blog="$blog"/>
            @endforeach
            {{-- endforeach --}}
            {{-- paging links here --}}
            {{-- else 
                <div style="margin-left:20px;" class="bt_cont"> <a class="btn sqaure_bt" href="">Back</a> </div>
             endif --}}
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="side_bar">        
            <x-sidebar.searchForBlogs/>
            <x-sidebar.news :news="$sideNews"/>
            <x-sidebar.services/>
          </div>
        </div>
      </div>
      <div class="center">
        {{ $blogs->links() }}
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