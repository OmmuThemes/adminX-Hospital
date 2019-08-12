<?php
/**
 * @var $this AppointmentController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Appointment'=>array('index'),
		'Doctor Schedule',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/fullcalendar/fullcalendar.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/fullcalendarscripts.bundle.js', CClientScript::POS_END); 
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/calendar.js', CClientScript::POS_END); 
?>

<div class="row page-calendar">
	<div class="col-lg-9 col-md-12 col-sm-12">
		<div class="card">
			<div class="body">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<button class="btn btn-raised btn-success btn-sm" id="change-view-today">today</button>
						<button class="btn btn-raised btn-default btn-sm" id="change-view-day" >Day</button>
						<button class="btn btn-raised btn-default btn-sm" id="change-view-week">Week</button>
						<button class="btn btn-raised btn-default btn-sm" id="change-view-month">Month</button>
					</div>
				</div>
				<div id="calendar"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-12 col-sm-12">
		<div class="card">
			<div class="body">
				<a class="btn btn-raised btn-primary" href="<?php echo Yii::app()->controller->createUrl('book');?>"><i class="zmdi zmdi-plus"></i>Add Schedule</a>
				<div class="event-name b-greensea">The Custom Event #1<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
				<div class="event-name b-lightred">The Custom Event #2<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
				<div class="event-name b-amethyst">The Custom Event #3<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
				<div class="event-name b-amethyst">The Custom Event #4<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
				<div class="event-name b-success">The Custom Event #5<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
				<div class="event-name b-lightred">The Custom Event #6<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
				<div class="event-name b-greensea">The Custom Event #7<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
				<div class="event-name b-success">The Custom Event #8<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
				<div class="event-name b-success">The Custom Event #9<a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
			</div>
		</div>
	</div>
</div>