<x-app>
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">{{ $news->headline }}</h1>
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">News</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 service_list">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
           <x-news.news-detail :news="$news"/>
          </div>
        </div>
        <div class="col-md-3">    
          <div class="side_bar">
          <x-sidebar.searchForNews/>
          <x-sidebar.news :news="$sideNews"/>
          <x-sidebar.services :service="$sideServices"/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
</x-app>