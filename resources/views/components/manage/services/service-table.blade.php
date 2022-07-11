@props(['service'])
@if($service != null)
@foreach($service as $ser)
<div class="col-md-4 service_blog margin_bottom_50">
<div class="full">
  <div class="service_img"> <img class="img-responsive" src="{{ $ser->image ? asset('public/images/services/' . $ser->image) : asset('public/images/shop/noimg.png') }}" alt="#" /> </div>
  <div class="service_cont">
    <h3 class="service_head">{{ $ser->title }}</h3>
    <p>{{ $ser->smalldesc }}</p>
    <div class="bt_cont"> <a style="margin-right:5px;" class="btn sqaure_bt" href="">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete &#34;{{ $ser->title }}&#34; from services?');" class="btn sqaure_bt"
     style="background-color:indianred" href="">Delete</a> 
    </div>
  </div>
</div>
</div>
@endforeach
</div>
@endif