<?php $baseUrl = Config::get('app.url'); ?>
@include('webmaster.layouts.includes.header')
<div class="container-fluid">
    <div class="row-fluid">
        @include('webmaster.layouts.includes.sidebar')
        <div id="content" class="span9">
        	@if ( Session::has('flash_message') )
 			<div class="alert {{ Session::get('flash_type') }}">
				<button class="close" data-dismiss="alert">&times;</button>
				<strong>{{ Session::get('flash_label') }}</strong> {{ Session::get('flash_message') }}
			</div>
			@endif
            @yield('content')
        </div>
    </div>
</div>
@include('webmaster.layouts.includes.footer')