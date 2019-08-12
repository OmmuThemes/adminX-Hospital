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
		'Alerts',
	);
?>

<div class="row clearfix">
	<div class="col-lg-12">
		<div class="card">
			<div class="header">
				<h2>
					BASIC ALERTS
					<small>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</small>
				</h2>
				<ul class="header-dropdown">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="zmdi zmdi-more-vert"></i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="alert alert-success">
					<strong>Success!</strong> This alert box could indicate a successful or positive action.
				</div>
				<div class="alert alert-info">
					<strong>Info!</strong> This alert box could indicate a neutral informative change or action.
				</div>
				<div class="alert alert-warning">
					<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
				</div>
				<div class="alert alert-danger">
					<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
				</div>
				<div class="alert alert-primary">
					<strong>Primary!</strong> Indicates an important action.
				</div>
				<div class="alert alert-secondary">
					<strong>Secondary!</strong> Indicates a slightly less important action.
				</div>
				<div class="alert alert-dark">
					<strong>Dark!</strong> Dark grey alert.
				</div>
				<div class="alert alert-light">
					<strong>Light!</strong> Light grey alert.
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="card">
			<div class="header">
				<h2>Alert Links
					<small>Add the <code>.alert-link</code> class to any links inside the alert box to create "matching colored links"</small>
				</h2>
			</div>
			<div class="body">
				<div class="alert alert-success">
					<strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
					</div>
					<div class="alert alert-info">
					<strong>Info!</strong> You should <a href="#" class="alert-link">read this message</a>.
					</div>
					<div class="alert alert-warning">
					<strong>Warning!</strong> You should <a href="#" class="alert-link">read this message</a>.
					</div>
					<div class="alert alert-danger">
					<strong>Danger!</strong> You should <a href="#" class="alert-link">read this message</a>.
					</div>
					<div class="alert alert-primary">
					<strong>Primary!</strong> You should <a href="#" class="alert-link">read this message</a>.
					</div>
					<div class="alert alert-secondary">
					<strong>Secondary!</strong> You should <a href="#" class="alert-link">read this message</a>.
					</div>
					<div class="alert alert-dark">
					<strong>Dark!</strong> You should <a href="#" class="alert-link">read this message</a>.
					</div>
					<div class="alert alert-light">
					<strong>Light!</strong> You should <a href="#" class="alert-link">read this message</a>.
				</div>
			</div>
		</div>
	</div>
</div>