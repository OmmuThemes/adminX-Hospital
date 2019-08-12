<?php
/**
 * @var $this PaymentController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Payments'=>array('index'),
		'Add Payment',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css');
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/waitMe/waitMe.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/autosize/autosize.js', CClientScript::POS_END); // Autosize Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/momentjs/moment.js', CClientScript::POS_END); // Moment Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js', CClientScript::POS_END); // Bootstrap Material Datetime Picker Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/basic-form-elements.js', CClientScript::POS_END);
?>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2>Payment Information <small>Description text here...</small> </h2>
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
				<div class="clearfix">
					<form class="admin-x col-lg-12 row">
						<div class="col-sm-12 col-lg-6">
							<div class="form-group">
								<div class="form-line">
									<input type="number" class="form-control" placeholder="Payment Number">
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Patient Name">
								</div>
							</div>
						</div>
						<div class="col-sm-12 ">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" placeholder="Doctor Name">
								</div>
							</div>
						</div>
						<div class="col-sm-12 ">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="datepicker form-control" placeholder="Payment Date">
								</div>
							</div>
						</div>
						<div class="col-sm-12 ">
							<div class="form-group">
								<div class="form-line">
									<input type="number" class="form-control" placeholder="Total Amount">
								</div>
							</div>
						</div>
						<div class="col-sm-12 ">
							<div class="form-group">
								<div class="form-line">
									<input type="number" class="form-control" placeholder="Discount">
								</div>
							</div>
						</div>
						<div class="col-sm-12 ">
							<div class="form-group drop-custum">
								<select class="form-control show-tick">
									<option value="">-- Payment Method --</option>
									<option>Cash</option>
									<option>Cheque</option>
									<option>Credit Card</option>
									<option>Debit Card</option>
									<option>Netbanking</option>
									<option>Insurance</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12 ">
							<div class="form-group drop-custum">
								<select class="form-control show-tick">
									<option value="">-- Payment Status --</option>
									<option>Select Status</option>
									<option>Complete</option>
									<option>Pending</option>
									<option>Partial</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
							<button type="submit" class="btn btn-raised">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>