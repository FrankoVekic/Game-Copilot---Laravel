@props(['total'])
<tr>
    @unless (Cart::count()==0)
    <td><h3>Total</h3></td>
    <td class="text-right"><h4>${{ $total }}</h4></td>
    @else
    <td><h3>Total</h3></td>
    <td class="text-right"><h4>$0.00</h4></td>
    @endunless

</tr>