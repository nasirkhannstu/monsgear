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
				+ Add New Product:
			</div>

			<div class="panel-body">
{!! Form::open(array('route' => 'product.store','data-parsley-validate'=>'','files' => true)) !!}

				{{Form::label('name','Name:')}}
				{{Form::text('name',null,array('class' => 'form-control','required'=>'','maxlength'=>'255'))}}

				{{Form::label('slug','Slug:')}}
				{{Form::text('slug', null,array('class' => 'form-control','required'=>'','maxlength'=>'225','min'=>'5'))}}

				{{Form::label('price','Price:')}}
				{{Form::text('price',null,array('class' => 'form-control','required'=>'','maxlength'=>'255'))}}

				{{Form::label('body','Product Description:')}}
				{{Form::textarea('body',null,array('class' => 'form-control'))}}


				{{Form::label('image','Post Body:')}}
				{{Form::file('image')}}

				{{Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
			{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection