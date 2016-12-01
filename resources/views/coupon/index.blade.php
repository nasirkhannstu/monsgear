@extends('admin')
@section('title', '| Moonster-Gear')
@section('content')
	<div class="row">
		<div class="panel panel-info">
		  <div class="panel-heading">Panel heading without title</div>
		  <div class="panel-body">
		    <div class="table-responsive">
				<table class="table table-hover">
				<strong><a href="{{ route('coupons.create')}}"> + Add New Coupon</a></strong>
				<thead> 
					<tr>
						<th>Name</th>
						<th>Discount Type</th>
						<th>Discount Amount</th>
						<th>Free Shipping</th>
						<th>Minimum Spent</th>
						<th>Exclude Category</th>
						<th>Limit Per Coupon</th>
						<th>Exp Date</th>
						<th>Created at</th>
						<th>Delet</th>
					</tr> 
				</thead> 
				<tbody>
				@foreach ($coupons as $coupon)
					<tr>
						<td>{{ $coupon->name }}</td>
						<td>{{ $coupon->dtype }}</td>
						<td>{{ $coupon->amount }}</td>
						<td>{{ $coupon->freeship }}</td>
						<td>{{ $coupon->minspent }}</td>
						<td>{{ $coupon->excludcat }}</td>
						<td>{{ $coupon->limit }}</td>
						<td>{{ $coupon->expire }}</td>
						<td>{{ date('M j, Y', strtotime($coupon->created_at)) }}</td>
						<td>
							{!! Form::open(['route' => ['coupons.destroy', $coupon->id], 'method' => 'DELETE']) !!}

								{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}

							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
				</tbody> 
				</table>
			</div>
		  </div>
		</div>

		<div class="text-center">
			{!! $coupons->links() !!}
		</div>
	</div>
@endsection