<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('ShoutBlast&trade; - Shout, blast, go!'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('shoutblast');

		echo $scripts_for_layout;
	?>
</head>
<body>

<div id="top_nav">
<ul>
<li><a href="/">Home</a></li>
<li><a href="/users/my_account">My Account</a></li>
<li><a href="/users/dashboard">My Dashboard</a></li>
<li><a href="/recipients">My Recipients</a></li>
<li><a href="/users/logout">Logout</a></li>
</ul>
</div>

	<div id="container">
		<div id="header">
		</div>
		<div id="content">

			<?php 
				echo $this->Session->flash(); 
				echo $this->Session->flash('auth');
			?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			Powered by <a href="#">Xandermar LLC</a>
			<?php echo $this->element('sql_dump'); ?>
		</div>
	</div>
</body>
</html>


