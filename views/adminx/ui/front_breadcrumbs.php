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
		'Breadcrumbs',
	);
?>

<div class="row clearfix">
	<div class="col-lg-6 col-md-6 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> BASIC EXAMPLES <small>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</small> </h2>
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
				<ol class="breadcrumb">
					<li class="active">Home</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="javascript:void(0);">Home</a></li>
					<li class="active">Library</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="javascript:void(0);">Home</a></li>
					<li><a href="javascript:void(0);">Library</a></li>
					<li class="active">Data</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> WITH ICONS </h2>
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
				<ol class="breadcrumb">
					<li class="active"> <i class="material-icons">home</i> Home </li>
				</ol>
				<ol class="breadcrumb">
					<li> <a href="javascript:void(0);"> <i class="material-icons">home</i> Home </a> </li>
					<li class="active"> <i class="material-icons">library_books</i> Library </li>
				</ol>
				<ol class="breadcrumb">
					<li> <a href="javascript:void(0);"> <i class="material-icons">home</i> Home </a> </li>
					<li> <a href="javascript:void(0);"> <i class="material-icons">library_books</i> Library </a> </li>
					<li class="active"> <i class="material-icons">archive</i> Data </li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> WITH MATERIAL DESIGN COLORS <small>You can use material design colors which examples are <code>.breadcrumb-col-pink, .breadcrumb-col-teal</code>.</small> </h2>
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
				<ol class="breadcrumb breadcrumb-col-pink">
					<li><a href="javascript:void(0);">Home</a></li>
					<li class="active">Library</li>
				</ol>
				<ol class="breadcrumb breadcrumb-col-cyan">
					<li><a href="javascript:void(0);">Home</a></li>
					<li><a href="javascript:void(0);">Library</a></li>
					<li class="active">Data</li>
				</ol>
				<ol class="breadcrumb breadcrumb-col-teal">
					<li><a href="javascript:void(0);">Home</a></li>
					<li><a href="javascript:void(0);">Library</a></li>
					<li><a href="javascript:void(0);">Data</a></li>
					<li class="active">File</li>
				</ol>
				<ol class="breadcrumb breadcrumb-col-orange">
					<li><a href="javascript:void(0);">Home</a></li>
					<li><a href="javascript:void(0);">Library</a></li>
					<li><a href="javascript:void(0);">Data</a></li>
					<li><a href="javascript:void(0);">File</a></li>
					<li class="active">Extensions</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> WITH ICONS & MATERIAL DESIGN COLORS </h2>
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
				<ol class="breadcrumb breadcrumb-col-pink">
					<li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
					<li class="active"><i class="material-icons">library_books</i> Library</li>
				</ol>
				<ol class="breadcrumb breadcrumb-col-cyan">
					<li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
					<li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
					<li class="active"><i class="material-icons">archive</i> Data</li>
				</ol>
				<ol class="breadcrumb breadcrumb-col-teal">
					<li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
					<li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
					<li><a href="javascript:void(0);"><i class="material-icons">archive</i> Data</a></li>
					<li class="active"><i class="material-icons">attachment</i> File</li>
				</ol>
				<ol class="breadcrumb breadcrumb-col-orange">
					<li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
					<li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
					<li><a href="javascript:void(0);"><i class="material-icons">archive</i> Data</a></li>
					<li><a href="javascript:void(0);"><i class="material-icons">attachment</i> File</a></li>
					<li class="active"><i class="material-icons">extension</i> Extensions</li>
				</ol>
			</div>
		</div>
	</div>
	<!-- #END# With Icons & Material Design Colors --> 
</div>