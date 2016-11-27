@extends('admin')
@section('title', '| Moonster-Gear')
@section('content')
	<div class="row">
		<div class="panel panel-info">
		  <div class="panel-heading">Panel heading without title</div>
		  <div class="panel-body">
		    <div class="table-responsive">
				<table class="table table-hover">
				<strong><a href="{{ route('product.create')}}"> + Add New Product</a></strong>
				<thead> 
					<tr> 
						<th>#</th>
						<th>Slug</th>
						<th>Name</th>
						<th>Created At</th>
						<th>price</th>
						<th>Body</th>
						<th></th>
					</tr> 
				</thead> 
				<tbody>
				@foreach ($products as $key => $product)
					<tr>
						<th scope="row as-{{ $key }}">{{ $product->id }}</th>
						<td>{{ $product->slug }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ date('M j, Y', strtotime($product->created_at)) }}</td>
						<td>{{ $product->price }}</td>
						<td>{{ substr(strip_tags($product->body), 0, 50) }}{{ strlen(strip_tags($product->body)) > 50 ? "..." : "" }}</td>
						<td>
							<a href="{{route('product.show', $product->id) }}" class="btn btn-default btn-sm">View</a>
							<a href="{{route('product.edit', $product->id) }}" class="btn btn-default btn-sm">Edit</a>

							{!! Form::open(['route' => ['product.destroy', $product->id], 'method' => 'DELETE']) !!}

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
			{!! $products->links() !!}
		</div>
	</div>
@endsection