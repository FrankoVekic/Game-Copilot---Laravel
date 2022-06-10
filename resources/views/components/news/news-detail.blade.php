@props(['news'])
<div class="col-md-12 service_blog margin_bottom_50">
    <div class="full">
      <div class="service_img"> <img class="img-responsive" src="{{ $news->image ? asset('public/images/news/' . $news->image) : asset('public/images/shop/noimg.png') }}" alt="#" /> </div>
      <div class="service_cont">
        <h3 class="service_head">{{ $news->headline }}</h3>
        <p>{{ $news->article }}</p>
        <p>Author: {{ $news->user->name }}</p>
        <p><i class="fa fa-clock-o"></i> {{ date_format($news->created_at,"d/m/Y") }}</p>
        <div class="bt_cont"> <a class="btn sqaure_bt" href="{{ env('APP_URL') }}news/index">Back</a> </div>
      </div>
    </div>
  </div>