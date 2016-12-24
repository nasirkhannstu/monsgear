@extends('admin')
@section('title', '| Coupon show')
@section('content')
	<div class="row">
		<div class="panel panel-info">
		  <div class="panel-heading">Orders</div>
		  <div class="panel-body">

		    <div class="table-responsive">
				<table class="table table-hover">
				<thead> 
					<tr> 
						<th>Product Name</th>
						<th>Product Price</th>
						<th>Product Quantity</th>
					</tr> 
				</thead>
				<tbody>
				@foreach ($cartproducts as $cartproduct)
				
					<tr>
						<th>
						@foreach ($mproducts as $mproduct)
						@if($cartproduct->product_id == $mproduct->id)
						{{ $mproduct->name }}
						@endif
						@endforeach
						</th>
						<th>
						@foreach ($mproducts as $mproduct)
						@if($cartproduct->product_id == $mproduct->id)
						{{ $mproduct->price }}
						@endif
						@endforeach
						</th>
						<td>{{ $cartproduct->product_amount }}</td>
					</tr>
				
				@endforeach
				</tbody> 
				</table>
			</div>
			<div class="col-md-6  col-sm-6">
				<div class="well">
					<dl class="dl-horizontal">
						<label>First Name:({{ $order->id }})</label>
						<p>{{ $info->fname }}</a></p>
					</dl>
					<dl class="dl-horizontal">
						<label>Last Name:</label>
						<p>{{ $info->lname }}</p>
					</dl>
				</div>
			</div>
			<div class="col-md-6  col-sm-6">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Order Total:</label>
						<p>{{ $order->total }}</a></p>
					</dl>
				</div>
			</div>
		  </div>
		</div>
	</div>
@endsection