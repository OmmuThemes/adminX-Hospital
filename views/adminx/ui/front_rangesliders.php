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
		'Range Sliders',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/ion-rangeslider/css/ion.rangeSlider.css');
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/ion-rangeslider/js/ion-rangeSlider/ion.rangeSlider.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/range-sliders.js', CClientScript::POS_END);
?>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2> EXAMPLES <small>Taken by Ion Range Slider which link is <a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">ionden.com/a/plugins/ion.rangeSlider/en.html</a></small> </h2>
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
			<div class="body">
				<div class="irs-demo"> <b>Start without params</b>
					<input type="text" id="range_01" value="" />
				</div>
				<div class="irs-demo"> <b>Set min value, max value and start point</b>
					<input type="text" id="range_02" value="" />
				</div>
				<div class="irs-demo"> <b>Set type to double and specify range, also showing grid and adding prefix "$"</b>
					<input type="text" id="range_03" value="" />
				</div>
				<div class="irs-demo"> <b>Set up range with negative values</b>
					<input type="text" id="range_04" value="" />
				</div>
				<div class="irs-demo"> <b>Using step 250</b>
					<input type="text" id="range_05" value="" />
				</div>
				<div class="irs-demo"> <b>Set up range with fractional values, using fractional step</b>
					<input type="text" id="range_06" value="" />
				</div>
				<div class="irs-demo"> <b>Set up you own numbers</b>
					<input type="text" id="range_07" value="" />
				</div>
				<div class="irs-demo"> <b>Using any strings as your values</b>
					<input type="text" id="range_08" value="" />
				</div>
				<div class="irs-demo"> <b>One more example with strings</b>
					<input type="text" id="range_09" value="" />
				</div>
				<div class="irs-demo"> <b>No prettify. Big numbers are ugly and unreadable</b>
					<input type="text" id="range_10" value="" />
				</div>
			</div>
		</div>
	</div>
</div>