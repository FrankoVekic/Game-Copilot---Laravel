@props(['blog'])
<div class="blog_section" style="max-height:90%">    
    <div class="full testimonial_simple_say margin_bottom_30_all" style="margin-top:0;">
    @unless (auth()->id() !== $blog->user_id)
      <div style="text-align:right;">
              <a style="margin-right:10px;" href="{{ env('APP_URL') }}blogs/{{ $blog->id }}/edit"><i style="color:#1E90FF; font-size:20px" class="fa fa-pencil" aria-hidden="true"></i></a>
              <a onclick="return confirm('Are you sure you want to delete this blog?');" href="{{ env('APP_URL') }}blogs/{{ $blog->id }}/delete"><i style="color:#1E90FF; font-size:20px" class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
        @endunless
        <p class="blog_head_index">{{ $blog->title }}</p>
        <p style="font-size:16px;"> {{ substr($blog->description,0,75) }}...</p>
        <div class="blog_feature_cantant">
        <div class="post_info">
          <ul>
            <li><i class="fa fa-user" aria-hidden="true"></i> {{ $blog->user->name }}</li>
            <li><i class="fa fa-comment" aria-hidden="true"></i> {{ count($blog->comments) }}</li>
            <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date_format($blog->created_at,"d/m/Y") }}</li>
          </ul>
        </div>
        </div>
        <div class="bottom_info">
          <div class="center"><a class="btn sqaure_bt" href="{{ env('APP_URL') }}blogs/{{ $blog->id }}">Read More<i class="fa fa-angle-right"></i></a></div>
        </div>
    </div>
    </div>