@extends('admin')
@section('title', '| Moonster-Gear')

<script>
$( function() {
$( "#datepicker" ).datepicker();
} );
</script>
@section('content')
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
				+ Add New Coupon:
			</div>

			<div class="panel-body">
{!! Form::open(array('route' => 'coupons.store','data-parsley-validate'=>'')) !!}

				{{Form::label('name','Name:')}}
				{{Form::text('name',null,array('class' => 'form-control','maxlength'=>'255'))}}

				{{Form::label('dtype','Discount Type:')}}
				<select class="form-control" name="dtype">
					<option value="cart">Cart Discount</option>
					<option value="percent">Cart Percent Discount</option>
				</select>

				{{Form::label('amount','Discount Amount:')}}
				{{Form::text('amount', null,array('class' => 'form-control','maxlength'=>'225'))}}

				{{Form::label('freeship','Free Shipping:')}}
				<select class="form-control" name="freeship">
					<option value="No">No</option>
					<option value="yes">Yes</option>
				</select>

				{{Form::label('minspent','Minimum Spent:')}}
				{{Form::text('minspent', null,array('class' => 'form-control','maxlength'=>'225'))}}

				{{Form::label('excludcat','Exclude Category:')}}
				<select class="form-control" name="excludcat">
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>

				{{Form::label('limit','Limit Per Coupon:')}}
				{{Form::text('limit',null,array('class' => 'form-control','maxlength'=>'255'))}}
				  
				{{Form::label('expire','Expiration(In hour):')}}
				{{Form::text('expire',null,array('class' => 'form-control','maxlength'=>'255', 'id' => 'datepicker'))}}
				<p>Date: <input type="text" id="datepicker"></p>
				
				{{Form::submit('Create Coupon',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
				
			{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection