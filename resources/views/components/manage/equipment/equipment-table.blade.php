@props(['equipment'])
  <tr>
    <th scope="row"><img class="img-responsive" src="{{ $equipment->image ? asset('public/images/shop/' . $equipment->image) : asset('public/images/shop/noimg.png') }}"></th>
    <td> <?=$equipment->title?></td>
    <td> $<?=$equipment->price?></</td>
    <td> <?=$equipment->description?></</td>
    <td class="center"> <?=$equipment->quantity?></</td>
    <td> <div class="bt_cont"> <a style="margin-right:5px;" 
        class="btn sqaure_bt" href="{{ env('APP_URL') }}admin-panel/{{ $equipment->id }}/edit">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete &#34;{{ $equipment->title }}&#34; from the store?');" 
        class="btn sqaure_bt" style="background-color:indianred" href="">Remove</a> </div></td>
  </tr>
