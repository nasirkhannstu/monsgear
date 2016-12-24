@extends('admin')
@section('title', '| Comment')
@section('content')
	<div class="row">
		<div class="panel panel-info">
		  <div class="panel-heading">Panel heading without title</div>
		  <div class="panel-body">
		    <div class="table-responsive">
				<table class="table table-hover">
				<thead> 
					<tr> 
						<th>#</th>
						<th>Email</th>
						<th>Comment</th>
						<th>Created At</th>
						<th>Approve</th>
						<th></th>
					</tr> 
				</thead> 
				<tbody>
				@foreach ($comments as $comment)
					<tr>
						<th scope="row">{{ $comment->id }}</th>
						<td>{{ $comment->email }}</td>
						<td>{{ $comment->body }}</td>
						<td>{{ date('M j, Y', strtotime($comment->created_at)) }}</td>
						<td>
							@if($comment->visibility == 'notVisible')
							{!! Form::open(['route' => ['comment.update', $comment->id], 'method' => 'PUT']) !!}

								{!! Form::submit('Approve', ['class' => 'btn btn-success btn-sm']) !!}

							{!! Form::close() !!}
							@else
							<h5>Approved</h5>
							@endif
						</td>
						<td>
							{!! Form::open(['route' => ['comment.destroy', $comment->id], 'method' => 'DELETE']) !!}

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
			{!! $comments->links() !!}
		</div>
	</div>
@endsection