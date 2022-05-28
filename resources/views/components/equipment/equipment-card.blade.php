@props(['equipment'])
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
  @unless (count($equipment)==0)
  @foreach ($equipment as $eq) 
  <div class="product_list">
      <div class="product_img"> <img class="img-responsive" src="{{ env('APP_URL') }}public/images/it_service/4.jpg" alt=""> </div>
      <div class="product_detail_btm">
        <div class="center">
          <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
        </div>
        <div class="starratin">
          <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
        </div>
        <div class="product_price">
          <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
        </div>
      </div>
    </div>
    @endforeach
    @else 
    <p>No Equipment Yet.</p>
    @endunless
  </div>