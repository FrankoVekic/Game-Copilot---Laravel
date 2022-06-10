@props(['news'])
  <div class="col-md-6 service_blog margin_bottom_50">
    <div class="full">
      <div class="service_img"> <img class="img-responsive" src="{{ $news->image ? asset('public/images/news/' . $news->image) : asset('public/images/shop/noimg.png') }}" alt="#" /> </div>
      <div class="service_cont">
        <h3 class="service_head">{{ $news->headline }}</h3>
        <p>{{ substr($news->article,0,75) }}</p>
        <div class="bt_cont"> <a class="btn sqaure_bt" href="{{ env('APP_URL') }}news/{{ $news->id }}">Read News</a> </div>
      </div>
    </div>
  </div>