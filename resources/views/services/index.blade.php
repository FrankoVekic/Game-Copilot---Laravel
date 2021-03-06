<x-app>
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title"> Service List</h1>
                <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active"> Service List</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section padding_layout_1 service_list">
    <div class="container">
      <div class="row">
          <div class="row">
            {{-- UNLESS SERVICE IS NULL --}}
            @foreach ($services as $service)
                <x-services.service-card :service="$service"/>
            @endforeach
          </div>
          <div class="center">
            {{ $services->links() }}
          </div>
          {{-- END UNLESS --}}
        </div>
        {{-- SIDE BAR --}}
      </div>
    </div>
  </div>
</x-app>