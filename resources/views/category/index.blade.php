@extends('admin')
@section('title', '| Moonster-Gear')

@section('stylsheets')

@endsection

@section('content')
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-info">
			<div class="panel-heading">
				+ Add New Product:
			</div>

			<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
				<strong><a href="{{ route('product.create')}}"> + Add New Product</a></strong>
				<thead> 
					<tr> 
						<th>#</th>
						<th>Name</th>
						<th></th>
					</tr> 
				</thead> 
				<tbody>
				@foreach ($categories as $key => $category)
					<tr>
						<th scope="row as-{{ $key + 1 }}">{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
						<td>
							<a href="{{route('categories.edit', $category->id) }}" class="btn btn-default btn-sm">Edit</a>

							{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}

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
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					+ Add New Product:
				</div>

				<div class="panel-body">
				{!! Form::open(array('route' => 'categories.store', 'method' => 'POST')) !!}

					{{Form::label('name','Name:')}}
					{{Form::text('name',null,array('class' => 'form-control','required'=>'','maxlength'=>'255'))}}

					{{Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection