@props(['blog'])
<div class="blog_feature_cantant">
    <p class="blog_head">{{ $blog->title }}</p>
    <p>{{ $blog->description }}</p>
    <div class="post_info">
      <ul>
        <li><i class="fa fa-user" aria-hidden="true"></i> {{ $blog->user->name }}</li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date_format($blog->created_at,"d/m/Y") }}</li>
      </ul>
    </div>
</div>
@if ($blog->image != null)
<div class="blog_feature_img"> <img style="max-width: 80%; max-height:80%;" class="img-responsiveBlogDetail" src="{{ $blog->image }}" alt="#"> </div>
@endif
                
