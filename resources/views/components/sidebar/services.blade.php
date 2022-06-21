@props(['service'])
<div class="side_bar_blog">
    <h4> SERVICES</h4>
    <div class="categary">
      <ul>
        @unless ($service == null)
        @foreach ($service as $service)
        <li><a href="{{ env('APP_URL') }}services/{{ $service->id }}"><i class="fa fa-angle-right"></i> {{ $service->title }}</a></li>
        @endforeach  
        @else 
        <li><i class="fa fa-angle-right"></i> No services yet.</li>
        @endunless          
      </ul>
    </div>
  </div>