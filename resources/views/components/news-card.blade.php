@props(['news'])
<div class="col-md-4">
    <div class="full blog_colum">
      <div class="blog_feature_head">
        <h4><a href="{{ env('APP_URL') }}news/{{ $news->id }}"> {{ $news->headline }}</a></h4>
      </div>
      <div class="blog_feature_cont">
        <p>{{ substr($news->article,0,75) }}</p>
      </div>
      <div class="post_time">
        <p><i class="fa fa-clock-o"></i> {{ $news->created_at }} ( In Maintenance )</p>
      </div>
    </div>
  </div>