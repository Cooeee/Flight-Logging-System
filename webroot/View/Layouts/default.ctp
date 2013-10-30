<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Southern Cross Gliding Club: Flight Logging System');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('menu');
		echo $this->Html->css('button');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>

</head>

<body onload="<?=$this->Session->flash('alert')?> <?=$this->Session->flash('alert2')?>">
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->para(null, $cakeDescription); ?></h1>
		</div>
		<div id="content">
			<div id="menu"><?= $this->element('menus/main'); ?></div>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('good'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			&nbsp;
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
