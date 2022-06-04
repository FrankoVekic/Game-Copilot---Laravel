@props(['product'])
<tr>
    <td class="col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img style="max-height: 200px; max-width:200px;" class="media-object" src="{{ env('APP_URL') }}public/images/shop/noimg.png" alt="#"></a>
        <div class="media-body">
          <h4 class="media-heading"><a href="{{ env('APP_URL') }}products/{{ $product->id }}">{{ $product->name }}</a></h4></div>
      </div></td>
    <td class="col-md-1" style="text-align: center"><input class="form-control" value="{{ $product->qty }}" type="email">
    </td>
    <td class="col-sm-1 col-md-1 text-center"><p class="price_table">${{ $product->price }}</p></td>
    <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
    <td class="col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
  </tr>