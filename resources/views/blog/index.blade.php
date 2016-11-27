@extends('admin')
@section('title', '| Moonster-Gear')
@section('content')
	<div class="row">
		<div class="panel panel-info">
		  <div class="panel-heading">Panel heading without title</div>
		  <div class="panel-body">
		    <div class="table-responsive">
				<table class="table table-hover">
				<strong><a href="{{ route('blog.create')}}"> + Write New Blog</a></strong>
				<thead> 
					<tr> 
						<th>#</th>
						<th>Slug</th>
						<th>Title</th>
						<th>Created At</th>
						<th>Comments</th>
						<th>Body</th>
						<th></th>
					</tr> 
				</thead> 
				<tbody>
				@foreach ($blogs as $blog)
					<tr>
						<th scope="row">{{ $blog->id }}</th>
						<td>{{ $blog->slug }}</td>
						<td>{{ $blog->title }}</td>
						<td>{{ date('M j, Y', strtotime($blog->created_at)) }}</td>
						<td>{{ substr(strip_tags($blog->body), 0, 50) }}{{ strlen(strip_tags($blog->body)) > 50 ? "..." : "" }}</td>
						<td>
							<a href="{{route('blog.show', $blog->id) }}" class="btn btn-default btn-sm">View</a>
							<a href="{{route('blog.edit', $blog->id) }}" class="btn btn-default btn-sm">Edit</a>

							{!! Form::open(['route' => ['blog.destroy', $blog->id], 'method' => 'DELETE']) !!}

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
			{!! $blogs->links() !!}
		</div>
	</div>
@endsection