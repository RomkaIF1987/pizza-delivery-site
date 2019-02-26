<table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th class="text-center">Items</th>
        <th class="text-center">User name</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Address delivery</th>
        <th class="text-center">Order sum</th>
        <th class="text-center">Order complete</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th class="text-center">Items</th>
        <th class="text-center">User name</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Address delivery</th>
        <th class="text-center">Order sum</th>
        <th class="text-center">Order complete</th>
    </tr>
    </tfoot>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td><a href="{{route('orders.show', ['id' => $order->id])}}">{{$order->id}}</a></td>
            <td><a href="{{route('orders.show', ['id' => $order->id])}}">{{$order->user_name}}</a></td>
            <td><a href="{{route('orders.show', ['id' => $order->id])}}">{{$order->user_phone}}</a></td>
            <td><a href="{{route('orders.show', ['id' => $order->id])}}">{{$order->user_address}}</a></td>
            <td><a href="{{route('orders.show', ['id' => $order->id])}}">${{$order->sum}}</a></td>
            <td>
                <form action="/completed-order/{{$order->id}}" method="POST">
                    @csrf
                    @if($order->orders_completed)
                        @method('DELETE')
                    @endif
                    <div class="custom-controls-stacked d-block">
                        <label class="custom-control material-checkbox">
                            <input
                                    type="checkbox"
                                    class="material-control-input"
                                    id="{{$order->id}}"
                                    onChange="this.form.submit()"
                                    name="completed"
                                    @if($order->orders_completed) checked @endif
                                    required> <span class="material-control-indicator"></span>
                        </label>
                    </div>
                </form>
            </td>
            {{--<td><a class="edit-modal btn btn-info"--}}
            {{--href="{{route('adminEditUser', ['user' => $user->id])}}">--}}
            {{--<span class="glyphicon glyphicon-edit"></span> Edit--}}
            {{--</a>--}}
            {{--<form action="{{route('users.destroy', ['user' => $user->id])}}"--}}
            {{--method="POST">--}}
            {{--@csrf--}}
            {{--@method('delete')--}}
            {{--<input type="hidden" name="_method" value="DELETE">--}}
            {{--<button class="delete-modal btn btn-danger">--}}
            {{--<span class="glyphicon glyphicon-trash"></span> Delete--}}
            {{--</button>--}}
            {{--</form>--}}
            {{--</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
