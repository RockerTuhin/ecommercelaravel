@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
<li>
	<i class="icon-home"></i>
	<a href="index.html">Home</a>
	<i class="icon-angle-right"></i> 
</li>
<li>
	<i class="icon-edit"></i>
	<a href="#">Edit Brand</a>
</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Brand</h2>
		</div>
		<div class="box-content">
			<p class="alert-success" style="text-align: center;">
			<?php
				$msg = Session::get('message');
				if($msg) {
					echo $msg;
					Session::put('message',NULL);
				}
			?>
			</p>
			<form class="form-horizontal" action="{{url('/update-brand',$single_brand_info->brand_id)}}" method="post">
				{{csrf_field()}}
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="date01">Brand Name</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" id="date01" name="brand_name" value="{{$single_brand_info->brand_name}}">
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Brand Description</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" rows="3" name="brand_description">
						{{$single_brand_info->brand_description}}
					</textarea>
				  </div>
				</div>


				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save Brand</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection