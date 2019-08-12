<?php
/**
 * @var $this UiController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'User Interface (UI)'=>array('index'),
		'Notifications',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap-notify/bootstrap-notify.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/notifications.js', CClientScript::POS_END);
?>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> NOTIFICATION POSITIONS </h2>
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
				<div class="row clearfix jsdemo-notification-button">
					<div class=" col-sm-12 col-md-6 col-lg-3 col-lg-2">
						<button type="button" class="btn btn-raised btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="left"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP LEFT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3 col-lg-2">
						<button type="button" class="btn btn-raised btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="center"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP CENTER </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3 col-lg-2">
						<button type="button" class="btn btn-raised btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="right"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP RIGHT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3 col-lg-2">
						<button type="button" class="btn btn-raised btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM LEFT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3 col-lg-2">
						<button type="button" class="btn btn-raised btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM CENTER </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3 col-lg-2">
						<button type="button" class="btn btn-raised btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM RIGHT </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php //begin.Notification Types ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> NOTIFICATION TYPES </h2>
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
				<div class="row clearfix jsdemo-notification-button">
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised btn-danger btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
									data-animate-enter="" data-animate-exit="" data-color-name="alert-danger"> DANGER </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised btn-success btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
									data-animate-enter="" data-animate-exit="" data-color-name="alert-success"> SUCCESS </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised btn-warning btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
									data-animate-enter="" data-animate-exit="" data-color-name="alert-warning"> WARNING </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised btn-info btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
									data-animate-enter="" data-animate-exit="" data-color-name="alert-info"> INFO </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Notification Types ?>

<?php //begin.With Material Design Colors ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> WITH MATERIAL DESIGN COLORS <small>You can use the material design colors which example class are <code>.bg-pink, .bg-green</code></small> </h2>
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
				<div class="row clearfix jsdemo-notification-button">
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-red btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-red"> RED </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-green btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-green"> GREEN </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-orange btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-orange"> ORANGE </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-blue btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-blue"> BLUE </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-teal btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-teal"> TEAL </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-cyan btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-cyan"> CYAN </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-pink btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-pink"> PINK </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-purple btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-purple"> PURPLE </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-blue-grey btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-blue-grey"> BLUE GREY </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-deep-orange btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-deep-orange"> DEEP ORANGE </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-light-green btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-light-green"> LIGHT GREEN </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-black btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
									data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BLACK </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.With Material Design Colors ?>

<?php //begin.Notification Animations ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> NOTIFICATION ANIMATIONS <small>You can use <a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css</a> class for animating.</small> </h2>
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
				<div class="row clearfix jsdemo-notification-button">
					<div class="col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeIn"
									data-animate-exit="animated fadeOut" data-color-name="bg-black"> FADE IN/OUT </button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInLeft"
									data-animate-exit="animated fadeOutLeft" data-color-name="bg-black"> FADE IN/OUT LEFT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated fadeInRight"
									data-animate-exit="animated fadeOutRight" data-color-name="bg-black"> FADE IN/OUT RIGHT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInUp"
									data-animate-exit="animated fadeOutUp" data-color-name="bg-black"> FADE IN/OUT UP </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInDown"
									data-animate-exit="animated fadeOutDown" data-color-name="bg-black"> FADE IN/OUT DOWN </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceIn"
									data-animate-exit="animated bounceOut" data-color-name="bg-black"> BOUNCE IN/OUT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInLeft"
									data-animate-exit="animated bounceOutLeft" data-color-name="bg-black"> BOUNCE IN/OUT LEFT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated bounceInRight"
									data-animate-exit="animated bounceOutRight" data-color-name="bg-black"> BOUNCE IN/OUT RIGHT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInUp"
									data-animate-exit="animated bounceOutUp" data-color-name="bg-black"> BOUNCE IN/OUT UP </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInDown"
									data-animate-exit="animated bounceOutDown" data-color-name="bg-black"> BOUNCE IN/OUT DOWN </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateIn"
									data-animate-exit="animated rotateOut" data-color-name="bg-black"> ROTATE IN/OUT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateInUpLeft"
									data-animate-exit="animated rotateOutUpLeft" data-color-name="bg-black"> ROTATE IN/OUT UP LEFT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated rotateInUpRight"
									data-animate-exit="animated rotateOutUpRight" data-color-name="bg-black"> ROTATE IN/OUT UP RIGHT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateInDownLeft"
									data-animate-exit="animated rotateOutDownLeft" data-color-name="bg-black"> ROTATE IN/OUT DOWN LEFT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated rotateInDownRight"
									data-animate-exit="animated rotateOutDownRight" data-color-name="bg-black"> ROTATE IN/OUT DOWN RIGHT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
									data-animate-enter="animated zoomIn" data-animate-exit="animated zoomOut" data-color-name="bg-black"> ZOOM IN/OUT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
									data-animate-enter="animated zoomInLeft" data-animate-exit="animated zoomOutLeft" data-color-name="bg-black"> ZOOM IN/OUT LEFT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="right"
									data-animate-enter="animated zoomInRight" data-animate-exit="animated zoomOutRight" data-color-name="bg-black"> ZOOM IN/OUT RIGHT </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
									data-animate-enter="animated zoomInUp" data-animate-exit="animated zoomOutUp" data-color-name="bg-black"> ZOOM IN/OUT UP </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
									data-animate-enter="animated zoomInDown" data-animate-exit="animated zoomOutDown" data-color-name="bg-black"> ZOOM IN/OUT DOWN </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-purple btn-block waves-effect" data-placement-from="top" data-placement-align="left"
									data-animate-enter="animated flipInX" data-animate-exit="animated flipOutX" data-color-name="bg-black"> FLIP IN/OUT X </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-purple btn-block waves-effect" data-placement-from="top" data-placement-align="left"
									data-animate-enter="animated flipInY" data-animate-exit="animated flipOutY" data-color-name="bg-black"> FLIP IN/OUT Y </button>
					</div>
					<div class=" col-sm-12 col-md-6 col-lg-3">
						<button type="button" class="btn btn-raised bg-indigo btn-block waves-effect" data-placement-from="top" data-placement-align="right"
									data-animate-enter="animated lightSpeedIn" data-animate-exit="animated lightSpeedOut"
									data-color-name="bg-black"> LIGHT SPEED IN/OUT </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Notification Animations ?>