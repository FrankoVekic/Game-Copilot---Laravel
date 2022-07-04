<x-app>
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Manage Equipment</h1>
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">Manage Equipment</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section padding_layout_1 service_list">
    <div class="container">
      <div class="row">
      <div class="side_bar_blog">
          <h3 style="text-align:center;">FIND EQUIPMENT</h3>
            <div class="side_bar_search">
              <form action="">
                <div class="input-group stylish-input-group">
                    <input class="form-control" name="search" placeholder="Search" type="text">
                    <span class="input-group-addon">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </form>
          </div>
      </div>
        <div class="center" style="margin-bottom:25px;">
          <a href="{{ env('APP_URL') }}admin-panel/create_equipment" class="btn main_bt" type="submit">Add New</a>
      </div>
      <div class="container">
      <div class="row">
      <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Description</th>
        <th scope="col">Product Quantity</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @unless($equipmentAll == null)
        @foreach ($equipmentAll as $equipment)
        <x-manage.equipment.equipment-table :equipment="$equipment"/>
            @endforeach
         @else
        <tr>
        <th>No Equipment In The Shop.</th>
        </tr>
            @endunless
      </tbody>
      </table>
      <div class="center">
        {{ $equipmentAll->links() }}
      </div>
      </div>
    </div>
  </div>
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