@props(['shipping'])
<tr>
    @unless (Cart::count()==0)
    <td><h5>Estimated shipping</h5></td>
    <td class="text-right"><h4>${{ $shipping }}</h4></td>
    @else
    <td><h5>Estimated shipping</h5></td>
    <td class="text-right"><h4>$0.00</h4></td>
    @endunless

</tr>