@extends('webmaster.layouts.main')

@section('title', 'Admin Home page')

@section('content')
<div class="list-languages">
	<div class="row-fluid">
	    <!-- block -->
	    <div class="block">
	        <div class="navbar navbar-inner block-header">
	            <div class="muted pull-left">Add new language</div>
	        </div>
	        <div class="block-content collapse in">
	            <div class="span12">
					{!! Form::open(array('url' => 'admin/languages/add')) !!}
						<div class="form-group">
							<label for="lang-id">Language Name</label>
	    					{!! Form::text('language_id'); !!}
	    				</div>
	    				<div class="form-group">
							<label for="lang-id">Language Title</label>
	    					{!! Form::text('language_title'); !!}
	    				</div>
	    				<div class="form-group">
							<label for="lang-id">Language Price</label>
	    					{!! Form::text('language_price'); !!}
	    				</div>
	    				<div class="form-group">
	    					{!! Form::submit('Click Me!'); !!}
	    				</div>
					{!! Form::close() !!}
	            </div>
	        </div>
	    </div>
	    <!-- /block -->
	</div>
</div><!-- END .list-language -->
@endsection