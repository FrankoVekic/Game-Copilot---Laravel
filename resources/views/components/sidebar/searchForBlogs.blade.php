<div class="side_bar_blog">
    <h4>SEARCH</h4>
    <div class="side_bar_search">
      <form method="GET" action="{{ env('APP_URL') }}blogs/index">
      <div class="input-group stylish-input-group">
        <input class="form-control" name="search" placeholder="Search" type="text">
        <span class="input-group-addon">
        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </span> </div>
      </form>
    </div>
  </div>