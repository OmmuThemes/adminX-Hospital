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
		'Modals Popups',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/modals.js', CClientScript::POS_END);
?>
<?php //begin.Modal Size Example ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> MODAL SIZE EXAMPLE <small>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</small> </h2>
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
				<button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">MODAL - DEFAULT SIZE</button>
				<button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">MODAL - LARGE SIZE</button>
				<button type="button" class="btn btn-default waves-effect" data-toggle="modal" data-target="#smallModal">MODAL - SMALL SIZE</button>
			</div>
		</div>
	</div>
</div>
<?php //end.Modal Size Example ?>

<?php //begin.Material Design Colors ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> WITH MATERIAL DESIGN COLORS <small>You can use material design colors which examples are <code>.modal-col-pink</code> class</small> </h2>
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
				<div class="button-demo js-modal-buttons">
					<button type="button" data-toggle="modal" data-target="#colorModal" data-color="red" class="btn bg-red waves-effect">RED</button>
					<button type="button" data-color="pink" class="btn bg-pink waves-effect">PINK</button>
					<button type="button" data-color="purple" class="btn bg-purple waves-effect">PURPLE</button>
					<button type="button" data-color="deep-purple" class="btn bg-deep-purple waves-effect">DEEP PURPLE</button>
					<button type="button" data-color="indigo" class="btn bg-indigo waves-effect">INDIGO</button>
					<button type="button" data-color="blue" class="btn bg-blue waves-effect">BLUE</button>
					<button type="button" data-color="light-blue" class="btn bg-light-blue waves-effect">LIGHT BLUE</button>
					<button type="button" data-color="cyan" class="btn bg-cyan waves-effect">CYAN</button>
					<button type="button" data-color="teal" class="btn bg-teal waves-effect">TEAL</button>
					<button type="button" data-color="green" class="btn bg-green waves-effect">GREEN</button>
					<button type="button" data-color="light-green" class="btn bg-light-green waves-effect">LIGHT GREEN</button>
					<button type="button" data-color="lime" class="btn bg-lime waves-effect">LIME</button>
					<button type="button" data-color="yellow" class="btn bg-yellow waves-effect">YELLOW</button>
					<button type="button" data-color="amber" class="btn bg-amber waves-effect">AMBER</button>
					<button type="button" data-color="orange" class="btn bg-orange waves-effect">ORANGE</button>
					<button type="button" data-color="deep-orange" class="btn bg-deep-orange waves-effect">DEEP ORANGE</button>
					<button type="button" data-color="brown" class="btn bg-brown waves-effect">BROWN</button>
					<button type="button" data-color="grey" class="btn bg-grey waves-effect">GREY</button>
					<button type="button" data-color="blue-grey" class="btn bg-blue-grey waves-effect">BLUE GREY</button>
					<button type="button" data-color="black" class="btn bg-black waves-effect waves-light">BLACK</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Material Design Colors ?>

<?php //Modal Dialogs ?>
<?php //begin.Default Size ?>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<?php //begin.Large Size ?>
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<?php //begin.Small Size ?>
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<?php //begin.For Material Design Colors ?>
<div class="modal fade" id="colorModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-red">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Color Modal title</h4>
            </div>
            <div class="modal-body col-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect col-white">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect col-white" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>