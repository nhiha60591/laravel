<div class="list-languages">
	<div class="row-fluid">
	    <!-- block -->
	    <div class="block">
	        <div class="navbar navbar-inner block-header">
	            <div class="muted pull-left">List languages</div>
	        </div>
	        <div class="block-content collapse in">
	            <div class="span12">
						<table class="table table-striped">
		              <thead>
		                <tr>
		                  <th>ID</th>
		                  <th>Name</th>
		                  <th>Title</th>
		                  <th>Price</th>
		                  <th>Action</th>
		                </tr>
		              </thead>
		              <tbody>
		              	@foreach ($languages as $language)
		                <tr>
		                  <td>{{$language->id}}</td>
		                  <td>{{$language->language_id}}</td>
		                  <td>{{$language->language_title}}</td>
		                  <td>{{$language->language_price}}</td>
		                  <td></td>
		                </tr>	
		                @endforeach	                
		              </tbody>
		            </table>
	            </div>
	        </div>
	    </div>
	    <!-- /block -->
	</div>
</div><!-- END .list-language -->