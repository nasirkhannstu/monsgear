@extends('admin')
@section('title', '| Moonster-Gear')
@section('stylsheets')
	{!! Html::style('css/select2.min.css') !!}
@endsection
@section('content')
	<div class="row">
		<div class="panel panel-info">
		  <div class="panel-heading">Edit Order: #({{ $order->id }})</div>
		  <div class="panel-body">
		  @include('partials._messages')
		  <div class="row">
		  <div class="col-md-6  col-sm-6">
				<div class="well">
					<h3>Add Product</h3><hr>
					<dl class="dl-horizontal">
						<p>
						{!! Form::open(array('route' => ['product.add',$order->id],'data-parsley-validate'=>'','files' => true)) !!}
						<select class="form-control select2-product" name="selprod">
							@foreach( $mproducts as $mproduct )
							<option value="{{ $mproduct->id }}">{{ $mproduct->name }}</option>
							@endforeach
						</select>
						{{Form::submit('Add',array('class' => 'btn btn-success btn-default','style'=>'margin-top:20px'))}}
						{!! Form::close() !!}
						</p>
					</dl>
				</div>
				<div class="well">
					<dl class="dl-horizontal">
						<label>Cart Total:</label>
						<p>{{ $order->total }}</p>
					</dl>
					<dl class="dl-horizontal">
						<label>Coupon:</label>
						<p>
						@if($couponsel)
							{{ $couponsel->name }}
						@else
							NUll
						@endif
						</p>
					</dl>
					<dl class="dl-horizontal">
						<label>Grand Total:</label>
						<p>
							{{ $grandtotal }}
						</p>
					</dl>
				</div>
			</div>
			<div class="col-md-6  col-sm-6">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Update Status:</label>
						<p>
						{!! Form::open(array('route' => ['status.add',$order->id],'data-parsley-validate'=>'','files' => true)) !!}
						<select class="form-control  select2-product" name="selstatus">
								<option value="{{ $order->status }}">{{ $order->status }}</option>
								<option value="Pending">Pending</option>
								<option value="Processing">processing</option>
								<option value="Hold">Hold</option>
								<option value="Complete">Complete</option>
								<option value="Failed">Failed</option>
						</select>
						{{Form::submit('Update',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
						{!! Form::close() !!}
						</p>
					</dl>
					<dl class="dl-horizontal">
						<label>Add Coupon:</label>
						<p>
						{!! Form::open(array('route' => ['coupon.add',$order->id],'data-parsley-validate'=>'','files' => true)) !!}
						<select class="form-control  select2-product" name="selcoupon">
								@if($couponsel)
								<option value="{{ $couponsel->id }}">{{ $couponsel->name }}</option>
								@else
								<option value="NULL">NULL</option>
								@endif
								@foreach($coupons as $coupon)
									<option value="{{ $coupon->id }}">{{ $coupon->name }}</option>
								@endforeach
						</select>
						{{Form::submit('Update',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
						{!! Form::close() !!}
						</p>
					</dl>
				</div>
			</div>
			</div>

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
							{{ $mproduct->name }}({{ $mproduct->category_id }})
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
						<td>
	{!! Form::open(array('route' => ['quantity.update',$order->id],'data-parsley-validate'=>'','files' => true)) !!}
		{{Form::number('product_amount', $cartproduct->product_amount)}}
		{{Form::hidden('product_id', $cartproduct->id)}}
		{{Form::submit('Update',array('class' => 'btn btn-success btn-sm','style'=>''))}}
	{!! Form::close() !!}
						</td>
					</tr>
				
				@endforeach
				</tbody> 
				</table>
			</div>
			<div class="col-md-6  col-sm-6">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Customer:</label>
						<p>
						{{Form::text('slug', $order->user_id,array('class' => 'form-control','required'=>'','maxlength'=>'225')) }}
						</p>
					</dl>
				</div>
			</div>
			<div class="col-md-6  col-sm-6">
			{!! Form::open(array('route' => ['address.update',$order->id],'data-parsley-validate'=>'','files' => true)) !!}
				<div class="well">
					<h3>Shipping Address</h3><hr>
					<dl class="dl-horizontal">
						<label>Address:</label>
						<p>
							{{Form::text('address', $info->address,array('class' => 'form-control','required'=>'','maxlength'=>'225')) }}
						</p>
					</dl>
					<dl class="dl-horizontal">
						<label>City:</label>
						<p>
							{{Form::text('city', $info->city,array('class' => 'form-control','required'=>'','maxlength'=>'225')) }}
						</p>
					</dl>
					<dl class="dl-horizontal">
						<label>State:</label>
						<p>
							{{Form::text('state', $info->state,array('class' => 'form-control','required'=>'','maxlength'=>'225')) }}
						</p>
					</dl>
					<dl class="dl-horizontal">
						<label>Zip:</label>
						<p>
							{{Form::text('zip', $info->zip,array('class' => 'form-control','required'=>'','maxlength'=>'225')) }}
						</p>
					</dl>
					{{Form::submit('Update Info',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
				</div>
			{!! Form::close() !!}
			</div>
		  </div>
		</div>
	</div>
@endsection
@section('script')
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-product').select2();
	</script>
@endsection