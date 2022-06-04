@props(['slug'])
<div class="col-md-3">
    <div class="side_bar">
      <div class="side_bar_blog">
        <h4>SEARCH</h4>
        <div class="side_bar_search">
          <form method="GET" action="{{ env('APP_URL') }}products/{{ $slug }}">
          <div class="input-group stylish-input-group">
            <input class="form-control" name="search" placeholder="Search" type="text">
            <span class="input-group-addon">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </span> </div>
          </form>
        </div>
      </div>
      <div class="side_bar_blog">
        <h4>OUR SERVICE</h4>
        <div class="categary">
          <ul>
            <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
            <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
            <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
            <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
            <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
          </ul>
        </div>
      </div>
      <div class="side_bar_blog">
        <h4>RECENT NEWS</h4>
        <div class="categary">
          <ul>
            <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Land lights let be divided</a></li>
            <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Seasons over bearing air</a></li>
            <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Greater open after grass</a></li>
            <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Gathered was divide second</a></li>
          </ul>
        </div>
      </div>
      <div class="side_bar_blog">
        <h4>TAG</h4>
        <div class="tags">
          <ul>
            <li><a href="#">Bootstrap</a></li>
            <li><a href="#">HTML5</a></li>
            <li><a href="#">Wordpress</a></li>
            <li><a href="#">Bootstrap</a></li>
            <li><a href="#">HTML5</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>