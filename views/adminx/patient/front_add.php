<?php
/**
 * @var $this PatientController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Patients'=>array('index'),
		'Add Patient',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/dropzone/dropzone.css');
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css');
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/waitMe/waitMe.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/autosize/autosize.js', CClientScript::POS_END); // Autosize Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/momentjs/moment.js', CClientScript::POS_END); // Moment Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/dropzone/dropzone.js', CClientScript::POS_END); // Dropzone Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js', CClientScript::POS_END); // Bootstrap Material Datetime Picker Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/basic-form-elements.js', CClientScript::POS_END);
?>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Basic Information <small>Description text here...</small> </h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<form class="admin-x">
					<div class="row clearfix">
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Phone No.">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-3 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="datepicker form-control" placeholder="Date of Birth">
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Age">
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="form-group drop-custum">
								<select class="form-control show-tick">
									<option value="">-- Gender --</option>
									<option value="10">Male</option>
									<option value="20">Female</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Enter Your Email">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
								<div class="dz-message">
									<div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
									<h3>Drop files here or click to upload.</h3>
									<em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
								<div class="fallback">
									<input name="file" type="file" multiple />
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-12">
							<div class="form-group">
								<div class="form-line">
									<textarea rows="4" class="form-control no-resize" placeholder="Description"></textarea>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
							<button type="submit" class="btn btn-raised">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-md-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Registration Information <small>Description text here...</small> </h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<form class="admin-x">
					<div class="row clearfix">
						<div class="col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Doctor Name">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Staff on Duty">
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Ward No.">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
							<button type="submit" class="btn btn-raised">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
