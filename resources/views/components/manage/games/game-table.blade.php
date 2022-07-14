@props(['games'])
<div class="center">
  <a href="{{ env('APP_URL') }}admin-panel/create_game" class="btn main_bt" type="submit">Add New</a>
</div>
<div class="container">
<div class="row">
@if($games != null)
@foreach($games as $game)
<div class="col-md-4 service_blog margin_bottom_50">
  <div class="full">
    <div class="service_img"> <img style="height:216px; width:370px;" class="img-responsive" src="{{ $game->image ? asset('public/images/shop/' . $game->image) : asset('public/images/shop/noimg.png') }}" alt="#" /> </div>
    <div class="service_cont">
      <h3 class="service_head"><?=$game->title?></h3>
      <p><?=$game->description?></p>
      <div class="row"> <a 
            style="margin-right:5px;" 
            class="btn sqaure_bt" 
            href="{{ env('APP_URL') }}admin-panel/product/{{ $game->id }}/edit">Edit
        </a>
        <form method="POST" action="{{ env('APP_URL') }}admin-panel/product/{{ $game->id }}">
          @csrf
          @method('DELETE')
          <button 
            onclick="return confirm('Are you sure you want to delete &#34;<?=$game->title?>&#34; from the store?');" 
            class="btn sqaure_bt" 
            style="background-color:indianred" 
            href="">Delete
        </button>
      </form> </div>
    </div>
  </div>
</div>
@endforeach
@else 
<div class="col-md-4 service_blog margin_bottom_50">
  <div class="full">
    <div class="service_img"> <img class="img-responsive" src="/public/images/shop/new.jpg" alt="#" /> </div>
    <div class="service_cont">
      <h3 class="service_head">Add New Game</h3>
      <p>Add a new game. You must fill in the appropriate information in order to enter the game in the shop.</p>
      <div class="bt_cont"> <a style="margin-right:5px; background-color:seagreen" class="btn sqaure_bt btn-lg btn-block" href="new_game">Add</a> </div>
    </div>
  </div>
</div>
</div>
@endif
</div>