<x-app>
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Blog Detail</h1>
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li><a href="{{ env('APP_URL') }}blogs/index">Blog List</a></li>
                  <li class="active">Blog Detail</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section padding_layout_1 blog_grid">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
          <div class="full">
            <div class="blog_section margin_bottom_0">
              <x-blogs.blog-detail-card :blog="$blog"/>               
              <div class="comment_section">            
              </div>
              <div class="view_commant">
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  </div>
                  <div class="col-lg-12 col-md-10 col-sm-9 col-xs-12">
                    <x-blogs.comment-card :comments="$comments"/>
                  </div>
                </div>
              </div>
              <x-blogs.comment-form :blog="$blog"/>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="side_bar">        
              <x-sidebar.searchForBlogs/>
              <x-sidebar.news :news="$sideNews"/>
              <x-sidebar.services/>
            </div>
          </div>
      </div>
    </div>
  </div>
</x-app>