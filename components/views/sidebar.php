<?php
/**
 * @var $this Sidebar
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<aside id="leftsidebar" class="sidebar"> 
	<?php //begin.Menu ?>
	<div class="menu">
		<ul class="list">
			<?php $this->widget('SidebarMenuAccount'); // Sidebar Menu Account ?>

			<?php if(!$condition || $configTheme['menu']['option'] == 'theme')
				$this->widget('SidebarMenuFromTheme'); // Sidebar Menu from Theme
			else if($configTheme['menu']['option'] == 'backoffice')
				$this->widget('SidebarMenuBackoffice'); // Sidebar Menu from Backoffice
			else if($configTheme['menu']['option'] == 'database')
				$this->widget('SidebarMenuFromDatabase', array('category'=>$configTheme['menu']['database-category'])); // Sidebar Menu from Database
			?>
		</ul>
	</div>
	<?php //end.Menu ?>
</aside>