@extends('admin')
@section('title', '| Blog Create')

@section('stylsheets')

	{!! Html::script('tinymce/js/tinymce/tinymce.min.js') !!}

	
@endsection

@section('content')
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
				Write New Blog:
			</div>

			<div class="panel-body">
			{!! Form::open(array('route' => 'blog.store','data-parsley-validate'=>'','files' => true)) !!}

				{{Form::label('title','Title:')}}
				{{Form::text('title',null,array('class' => 'form-control','required'=>'','maxlength'=>'255'))}}

				{{Form::label('slug','Slug:')}}
				{{Form::text('slug', null,array('class' => 'form-control','required'=>'','maxlength'=>'225'))}}

				{{Form::label('body','Post Body:')}}
				{{Form::textarea('body',null,array('class' => 'form-control my-editor'))}}

				{{Form::label('image','Upload Image For Blog:')}}
				{{Form::file('image')}}

				{{Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
			{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
@section('script')
	<script>
	// UniSharp/laravel-filemanager
	  var editor_config = {
	    path_absolute : "/",
	    selector: "textarea.my-editor",
	    plugins: [
	      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	      "searchreplace wordcount visualblocks visualchars code fullscreen",
	      "insertdatetime media nonbreaking save table contextmenu directionality",
	      "emoticons template paste textcolor colorpicker textpattern"
	    ],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
	    relative_urls: false,
	    file_browser_callback : function(field_name, url, type, win) {
	      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
	      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

	      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
	      if (type == 'image') {
	        cmsURL = cmsURL + "&type=Images";
	      } else {
	        cmsURL = cmsURL + "&type=Files";
	      }

	      tinyMCE.activeEditor.windowManager.open({
	        file : cmsURL,
	        title : 'Filemanager',
	        width : x * 0.8,
	        height : y * 0.8,
	        resizable : "yes",
	        close_previous : "no"
	      });
	    }
	  };
	  tinymce.init(editor_config);
	</script>
@endsection