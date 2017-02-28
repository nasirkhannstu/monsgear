<div class="col-md-12 col-xs-12">
@if (Session::has('success'))
	<div id="messages">
        <div class="section clearfix">
          <div class="messages status">
            <h2 class="element-invisible"></h2>
            {{ Session::get('success') }}
          </div>
        </div>
    </div>
@endif

@if (Session::has('err'))
	<div id="messages">
        <div class="section clearfix">
          <div class="messages statuserr">
            <h2 class="element-invisible"></h2>
            {{ Session::get('err') }}
          </div>
        </div>
    </div>
@endif

@if (count($errors) > 0)
		<div id="messages">
	        <div class="section clearfix">
	          <div class="messages statuserr">
	            <p>There was an Error.</p>
	            <ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
	          </div>
	        </div>
	    </div>
@endif
@if (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<strong>Error </strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif
</div>