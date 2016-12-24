@extends('admin')
@section('title', '| Product Edit')
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
				{!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT','files' => true]) !!}
					
					{{Form::label('name','Name:')}}
					{{Form::text('name',null,array('class' => 'form-control','required'=>'','maxlength'=>'255'))}}

					{{Form::label('slug','Slug:')}}
					{{Form::text('slug', null,array('class' => 'form-control','required'=>'','maxlength'=>'225'))}}

					{{ Form::label('category_id', 'Category:', ["class" => 'form-spacing-top']) }}
					{{ Form::select('category_id', $categories, null, ["class" => 'form-control']) }}

					{{Form::label('price','Price:')}}
					{{Form::text('price',null,array('class' => 'form-control','required'=>'','maxlength'=>'255'))}}

					{{Form::label('status','Status:')}}
					<select class="form-control" name="status">
							<option value="a">In Stock</option>
							<option value="n">out of stock</option>
					</select>

					{{Form::label('shortdes','Product Short Description:')}}
					{{Form::textarea('shortdes',null,array('class' => 'form-control'))}}

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