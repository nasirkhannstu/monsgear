@extends('admin')
@section('title', '| Product Comment')
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
				@foreach ($pcomments as $pcomment)
					<tr>
						<th scope="row">{{ $pcomment->id }}</th>
						<td>{{ $pcomment->email }}</td>
						<td>{{ $pcomment->body }}</td>
						<td>{{ date('M j, Y', strtotime($pcomment->created_at)) }}</td>
						<td>
							@if($pcomment->visibility == 'notVisible')
							{!! Form::open(['route' => ['pcomment.update', $pcomment->id], 'method' => 'PUT']) !!}

								{!! Form::submit('Approve', ['class' => 'btn btn-success btn-sm']) !!}

							{!! Form::close() !!}
							@else
							<h5>Approved</h5>
							@endif
						</td>
						<td>
							{!! Form::open(['route' => ['pcomment.destroy', $pcomment->id], 'method' => 'DELETE']) !!}

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
			{!! $pcomments->links() !!}
		</div>
	</div>
@endsection