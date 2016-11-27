@extends('admin')
@section('title', '| Moonster-Gear')

@section('content')
	<div class="row">
	
		<div class="panel panel-info">
			<div class="panel-heading">
				{{ $blog->title }}
			</div>

			<div class="panel-body">
				<img src="{{ asset('uploads/blogimg/'. $blog->image) }}" alt="img" width="100%">
				<p class="lead">{!! $blog->body !!}</p>
			</div>
		</div>
	</div>
@endsection