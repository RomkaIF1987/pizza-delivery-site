@component('mail::message')
<div class="row ml-5">
<h2>Your order is successful accepted</h2>
</div>
<div class="table">
<table style="width: 60%;">
<tr>
<th class="text-center">Items</th>
<th class="text-center">Product name</th>
<th class="text-center">Quantity</th>
<th class="text-center">Price</th>
</tr>
@foreach($order->orderItems as $orderItem)
<tr>
<td class="text-center">{{$i++}}</td>
<td class="text-center">{{$orderItem->menuItems->name}}</td>
<td class="text-center">{{$orderItem->quantity}}</td>
<td class="text-center">${{$orderItem->sum}}</td>
</tr>
@endforeach
</table>
</div>
<div class="row">
<div class="col-md-6">
<strong><h2> Total: {{$order->sum}}$</h2></strong>
</div>
</div>
@endcomponent