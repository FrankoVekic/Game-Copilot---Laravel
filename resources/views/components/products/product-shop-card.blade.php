@props(['product'])

<div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
    <div class="product_list">
      <div class="product_img"> <img class="img-responsive" src="{{ env('APP_URL') }}public/images/shop/noimg.png" alt=""> </div>
      <div class="product_detail_btm">
        <div class="center">
          <h4><a href="{{ env('APP_URL') }}products/{{ $product->id }}">{{ $product->title }}</a></h4>
        </div>
        <div class="starratin">
          <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
        </div>
        <div class="product_price">
          <p><span class="new_price">${{ $product->price }}</span></p>
        </div>
      </div>
    </div>
  </div>