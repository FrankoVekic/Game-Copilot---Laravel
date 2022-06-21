@props(['service'])
<div class="col-md-4 service_blog margin_bottom_50">
    <div class="full">
      <div class="service_img"> <img class="img-responsive" src="{{ $service->image ? asset('public/images/services/' . $service->image) : asset('public/images/shop/noimg.png') }}" alt="#" /> </div>
      <div class="service_cont">
        <h3 class="service_head"> {{ $service->title }}</h3>
        <p> {{ substr($service->description,0,75) }}</p>
        <div class="bt_cont"> <a class="btn sqaure_bt" href="{{ env('APP_URL') }}services/{{ $service->id }}">View Service</a> </div>
      </div>
    </div>
</div>