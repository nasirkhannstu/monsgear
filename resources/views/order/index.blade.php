@extends('admin')
@section('title', '| Moonster-Gear')
@section('content')
	<div class="row">
		<div class="panel panel-info">
		  <div class="panel-heading">Orders</div>
		  <div class="panel-body">
		    <div class="table-responsive">
				<table class="table table-hover">
				<thead> 
					<tr> 
						<th>Order Id</th>
						<th>Status</th>
						<th>Method</th>
						<th>Total</th>
						<th>coupon</th>
						<th>Created At</th>
						<th></th>
					</tr> 
				</thead> 
				<tbody>
				@foreach ($orders as $order)
					<tr>
						<th scope="row">{{ $order->id }}</th>
						<td>{{ $order->status }}</td>
						<td>{{ $order->method }}</td>
						<td>{{ $order->total }}</td>
						<td>{{ $order->coupon }}</td>
						<td>{{ date('M j, Y', strtotime($order->created_at)) }}</td>
						<td>
							<a href="{{route('order.show', $order->id) }}" class="btn btn-default btn-sm">View</a>
							<a href="{{route('order.edit', $order->id) }}" class="btn btn-default btn-sm">Edit</a>
						</td>
					</tr>
				@endforeach
				</tbody> 
				</table>
			</div>
		  </div>
		</div>

		<div class="text-center">
			{!! $orders->links() !!}
		</div>
	</div>
@endsection