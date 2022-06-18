@props(['service'])
<div class="col-md-6 service_blog margin_bottom_50">
    <div class="full">
      <div class="service_img"> <img class="img-responsive" src="" alt="#" /> </div>
      <div class="service_cont">
        <h3 class="service_head"> {{ $service->title }}</h3>
        <p> {{ substr(0,75,$service->description) }}</p>
        <div class="bt_cont"> <a class="btn sqaure_bt" href="">View Service</a> </div>
      </div>
    </div>
</div>