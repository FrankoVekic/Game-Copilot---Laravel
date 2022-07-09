<x-app>
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Manage Games</h1>
              <ol class="breadcrumb">
                <li><a href="">Home</a></li>
                <li class="active">Manage Games</li>
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
        <h3 style="text-align:center;">FIND GAME</h3>
          <div class="side_bar_search">
            <form action="">
              <div class="input-group stylish-input-group">
                  <input class="form-control" name="search" placeholder="Search" type="text">
                  <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </span> </div>
          </form>
        </div>
    </div>
    <x-manage.games.game-table :games="$games"/>
    <div class="center">
        {{ $games->links() }}
      </div>
        </div>
    </div>
  </div>
</div>
</x-app>