<?php
/**
 * @var $this SidebarDynamics
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<aside id="rightsidebar" class="right-sidebar">
	<ul class="nav nav-tabs tab-nav-right">
		<li class="nav-item"><a href="#settings" class="nav-link active" data-toggle="tab">Setting</a></li>
		<li class="nav-item"><a href="#chat" class="nav-link" data-toggle="tab">Chat</a></li>
		<li class="nav-item"><a href="#activities" class="nav-link" data-toggle="tab">Activities</a></li>
	</ul>
	<div class="tab-content">
		<?php $this->widget('SidebarDynamicSetting'); // Sidebar Setting ?>
		<?php $this->widget('SidebarDynamicChat'); // Sidebar Chat ?>
		<?php $this->widget('SidebarDynamicActivity'); // Sidebar Activity ?>
	</div>
</aside>