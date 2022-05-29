<x-app>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Shop Page</h1>
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">Shop</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 product_list_main">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            @foreach ( $equipment as $equipment )
        
            <x-equipment.equipment-shop-card :equipment="$equipment"/>

            @endforeach
          </div>
        </div>
        <div class="col-md-3">
          <div class="side_bar">
            <div class="side_bar_blog">
              <h4>SEARCH</h4>
              <div class="side_bar_search">
                <div class="input-group stylish-input-group">
                  <input class="form-control" placeholder="Search" type="text">
                  <span class="input-group-addon">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
              </div>
            </div>
            <div class="side_bar_blog">
              <h4>GET A QUOTE</h4>
              <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
              <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>
            <div class="side_bar_blog">
              <h4>OUR SERVICE</h4>
              <div class="categary">
                <ul>
                  <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                  <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                  <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                  <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                  <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
                </ul>
              </div>
            </div>
            <div class="side_bar_blog">
              <h4>RECENT NEWS</h4>
              <div class="categary">
                <ul>
                  <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Land lights let be divided</a></li>
                  <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Seasons over bearing air</a></li>
                  <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Greater open after grass</a></li>
                  <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Gathered was divide second</a></li>
                </ul>
              </div>
            </div>
            <div class="side_bar_blog">
              <h4>TAG</h4>
              <div class="tags">
                <ul>
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">HTML5</a></li>
                  <li><a href="#">Wordpress</a></li>
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">HTML5</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
</x-app>