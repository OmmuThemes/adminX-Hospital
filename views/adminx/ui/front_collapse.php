<?php
/**
 * @var $this UiController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'User Interface (UI)'=>array('index'),
		'Collapse',
	);
?>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2> EXAMPLE <small>Click the buttons below to show and hide another element via class changes. You can use a link with the <code>href</code> attribute, or a button with the <code>data-target</code> attribute. In both cases, the <code>data-toggle="collapse"</code> is required.</small> </h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body"> <a class="btn g-bg-blue waves-effect m-b-15" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false"
					   aria-controls="collapseExample"> LINK WITH HREF </a>
				<button class="btn btn-raised g-bg-blush2 waves-effect m-b-15" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
							aria-controls="collapseExample"> BUTTON WITH data-target </button>
				<div class="collapse" id="collapseExample">
					<div class="well"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica,
						craft beer labore wes anderson cred nesciunt sapiente ea proident. </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- #END# Example -->
<div class="">
	<h4>ACCORDION</h4>
</div>
<div class="row clearfix"> 
	<!-- Basic Examples -->
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2> BASIC EXAMPLES <small>Extend the default collapse behavior to create an accordion with the panel component.</small> </h2>
			</div>
			<div class="body">
				<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headingOne_1">
							<h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1"> Collapsible Group Item #1 </a> </h4>
						</div>
						<div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
							<div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
								non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
								single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
								helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
								Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
								raw denim aesthetic synth nesciunt you probably haven't heard of them
								accusamus labore sustainable VHS. </div>
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headingTwo_1">
							<h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
										aria-controls="collapseTwo_1"> Collapsible Group Item #2 </a> </h4>
						</div>
						<div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
							<div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
								non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
								single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
								helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
								Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
								raw denim aesthetic synth nesciunt you probably haven't heard of them
								accusamus labore sustainable VHS. </div>
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headingThree_1">
							<h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
										aria-controls="collapseThree_1"> Collapsible Group Item #3 </a> </h4>
						</div>
						<div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
							<div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
								non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
								single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
								helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
								Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
								raw denim aesthetic synth nesciunt you probably haven't heard of them
								accusamus labore sustainable VHS. </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- #END# Basic Examples -->
</div>