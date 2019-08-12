<?php
/**
 * @var $this UiController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'User Interface (UI)'=>array('index'),
		'SweetAlert',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/sweetalert/sweetalert.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/sweetalert/sweetalert.min.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/dialogs.js', CClientScript::POS_END);
?>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2>EXAMPLES</h2>
			</div>
			<div class="body">
				<div class="row clearfix js-sweetalert">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>A basic message</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="basic">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>A title with a text under</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="with-title">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>A success message!</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="success">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>A warning message, with a function attached to the <b>Confirm</b> button...</p>
						<button class="btn btn-raised btn-primary waves-effect" data-type="confirm">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>A message with a custom icon</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="with-custom-icon">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>An HTML message</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="html-message">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>A message with auto close timer</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="autoclose-timer">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>A replacement for the <b>prompt</b> function</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="prompt">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>With a loader (for AJAX request for example)</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="ajax-loader">CLICK ME</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h5>... and by passing a parameter, you can execute something else for <b>Cancel</b>.</h5>
						<button class="btn btn-raised btn-primary waves-effect" data-type="cancel">CLICK ME</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>