@props(['service'])
<div class="col-md-4 service_blog margin_bottom_50">
    <div class="full">
      <div class="service_img"> <img class="img-responsive" src="" alt="#" /> </div>
      <div class="service_cont">
        <h3 class="service_head"> {{ $service->title }}</h3>
        <p> {{ substr($service->description,0,75) }}</p>
        <div class="bt_cont"> <a class="btn sqaure_bt" href="">View Service</a> </div>
      </div>
    </div>
</div>