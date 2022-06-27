@props(['equipment'])
@unless($equipment == null)
@foreach ($equipment as $eq)
  <tr>
    <th scope="row"><img class="img-responsive" src="{{ $eq->image ? asset('public/images/shop/' . $eq->image) : asset('public/images/shop/noimg.png') }}"></th>
    <td> <?=$eq->title?></td>
    <td> $<?=$eq->price?></</td>
    <td> <?=$eq->description?></</td>
    <td class="center"> <?=$eq->quantity?></</td>
    <td> <div class="bt_cont"> <a style="margin-right:5px;" class="btn sqaure_bt" href="">Edit</a><a onclick="return confirm('Are you sure you want to delete &#34;{{ $eq->title }}&#34; from the store?');" class="btn sqaure_bt" style="background-color:indianred" href="">Remove</a> </div></td>
  </tr>
@endforeach
  @else
    <tr>
      <th>No Equipment In The Shop.</th>
    </tr>
  @endunless