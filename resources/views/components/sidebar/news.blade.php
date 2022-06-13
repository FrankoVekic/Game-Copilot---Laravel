@props(['news'])
<div class="side_bar_blog">
    <h4>RECENT NEWS</h4>
    <div class="categary">
      <ul>
        @unless ($news == null)
        @foreach ($news as $news)
        <li><a href="{{ env('APP_URL') }}news/{{ $news->id }}"><i class="fa fa-angle-right"></i> {{ $news->headline }}</a></li>
        @endforeach  
        @else 
        <li><i class="fa fa-angle-right"></i> No published news.</li>
        @endunless          
      </ul>
    </div>
  </div>