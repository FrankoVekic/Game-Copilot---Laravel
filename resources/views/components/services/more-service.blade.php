@props(['service'])
<div class="row">
    <div class="col-md-12">
      <div class="full">
        <div class="main_heading text_align_left" style="margin-bottom: 35px;">
          <h2>More Services</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    @unless ($service == null)
        @foreach ($service as $service)
        <div class="col-md-6 service_blog margin_bottom_50">
            <div class="full">
              <div class="service_img"> <img class="img-responsive" src="{{ $service->image ? asset('public/images/services/' . $service->image) : asset('public/images/shop/noimg.png') }}" alt="#" /> </div>
              <div class="service_cont">
                <h3 class="service_head"> {{ $service->title }}</h3>
                <p> {{ substr($service->description,0,75) }}</p>
                <div class="bt_cont"> <a class="btn sqaure_bt" href="{{ env('APP_URL') }}services/{{ $service->id }}">View Service</a> </div>
              </div>
            </div>
          </div>
        @endforeach

    @else

    <p>No Services Yet.</p>

    @endunless
    {{-- IF MORE SERVICES IS NOT NULL --}}
    {{-- FOREACH NEW SERVICE --}}
    
    {{-- END FOREACH --}}
    {{-- END IF --}}
</div>