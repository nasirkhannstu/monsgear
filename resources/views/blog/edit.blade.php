@extends('admin')
@section('title', '| Moonster-Gear')
@section('stylsheets')

	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

	<script type="text/javascript">
		tinymce.init({
			selector: 'textarea',
			plugins: "link, image",
			menubar: false
		});
	</script>
@endsection
@section('content')
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
				Edit Your Blog post.
			</div>

			<div class="panel-body">
				{!! Form::model($blog, ['route' => ['blog.update', $blog->id], 'method' => 'PUT', 'files' => true]) !!}
					
					{{ Form::label('title', 'Title') }}
					{{ Form::text('title', null, ["class" => 'form-control']) }}

					{{ Form::label('slug', 'Slug', ["class" => 'form-spacing-top']) }}
					{{ Form::text('slug', null, ["class" => 'form-control']) }}

					{{ Form::label('body', 'Body:',  ['class' => 'form-spacing-top']) }}
					{{ Form::textarea('body', null, ["class" => 'form-control']) }}

					{{Form::label('image','Upload Image For Blog:')}}
					{{Form::file('image')}}
				
					{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block','style'=>'margin-top:20px']) }}
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection