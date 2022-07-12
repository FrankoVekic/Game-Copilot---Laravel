<x-app>
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="title-holder">
                  <div class="title-holder-cell text-left">
                    <h1 class="page-title">Manage Services</h1>
                    <ol class="breadcrumb">
                      <li><a href="/">Home</a></li>
                      <li class="active">Manage Services</li>
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
          <div class="side_bar_blog">
              <h3 style="text-align:center;">FIND SERVICE</h3>
                <div class="side_bar_search">
                  <form action="">
                    @csrf
                    <div class="input-group stylish-input-group">
                        <input class="form-control" name="search" placeholder="Search" type="text">
                        <span class="input-group-addon">
                      <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span> </div>
                </form>
              </div>
          </div>
            <div class="center">
              <a href="{{ env('APP_URL') }}admin-panel/create_service" class="btn main_bt" type="submit">Add New</a>
          </div>
          <div class="container">
          <div class="row">
           <x-manage.services.service-table :service="$service"/>
           <div class="center">
            {{ $service->links() }}
          </div>
        </div>
      </div>
          </div>
      </div>
      </div>
</x-app>