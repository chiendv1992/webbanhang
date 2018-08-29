@extends('backend.master')
@section('content')
	<!-- start: Content -->
<div id="content" class="span10">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Categoty</a></li>
	</ul>
	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							{{csrf_field()}}
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Name Category</label>
									<div class="controls">
								  		<input class="input-xlarge focused" id="focusedInput" type="text" name="category">
									</div>
							  	</div>
							 	<div class="form-actions">
									<button type="submit" class="btn btn-primary">Save Category</button>
									<button class="btn">Cancel</button>
							  	</div>
							</fieldset>
						  </form>					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
</div>
@endsection()