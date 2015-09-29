<div id="admin-menus" class="admin-menus">
	<div id="tabs" class="tabs">
		<ul class="nav nav-pills">
		  <li role="presentation" class="active"><a href="#edit-menu">Edit Menu</a></li>
		  <li role="presentation"><a href="#manage-menu">Manage Menu</a></li>
		</ul>
		<div class="tab-content">
			<div id="edit-menu" class="tab-pane active">
				<div class="row-fluid">
				    <div class="span4">
				        <!-- block -->
				        <div class="block">
			        		<div class="navbar navbar-inner block-header">
				                <div class="muted pull-left">Custom Links</div>
				            </div>
				            <div class="block-content collapse in">
				            	<div class="form-group">
								    <label for="url" class="col-sm-2 control-label">URL</label>
								    <div class="col-sm-10">
								      <input type="url" class="form-control" id="url" name="url" placeholder="URL">
								    </div>
								</div>
								<div class="form-group">
								    <label for="link-text" class="col-sm-2 control-label">Link Text</label>
								    <div class="col-sm-10">
								      <input type="text" name="link-text" class="form-control" id="link-text" placeholder="Link Text">
								    </div>
								</div>
								<div class="form-group pull-right">
								    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
									<button type="button" class="btn btn-primary">Primary</button>
								</div>
				            </div>
				        </div>
				        <!-- END block -->
				    </div>
				    <div class="span8">
				        <!-- block -->
				        <div class="block">
			        		<div class="navbar navbar-inner block-header">
				                <div class="muted pull-left">Menu details</div>				                
				            </div>
				            <div class="block-content collapse in">
				            	<h3>Menu Structure</h3>
				            	<p class="description">Add menu items from the column on the left.</p>
				            </div>
				        </div>
				        <!-- END block -->
				    </div>
				</div>
			</div><!-- END #edit-menu -->
			<div id="manage-menu" class="tab-pane">
				Manage Menu
			</div><!-- END #manage-menu -->
		</div><!-- END .tab-content -->
	</div><!-- END #tabs -->
</div><!-- END #admin-menus -->