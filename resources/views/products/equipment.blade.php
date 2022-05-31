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
            @foreach ( $equipment as $eq )
            <x-products.product-shop-card :equipment="$eq"/>
            @endforeach         
          </div>
          <div class="center">
          {{ $equipment->links() }}
          </div>
        </div>        
        <x-partials.sidebar/>
      </div>
    </div>
  </div>
  <!-- end section -->
</x-app>