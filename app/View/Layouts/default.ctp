<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Sistema de control de acreditacion UQ');
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

		echo $this->Html->css(array('cake.generic','style'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="main">
		<header>
			<div id="contenedorHeader">
				<div class="panelHeader">
					<div id="logo">
						<?php echo $this->Html->image('logo.png',array('alt'=>'SCA-UQ','style'=>'width:100%; height:100%;')) ;?>
					</div>
				</div>
				<div class="panelHeader">
					
				</div>				
			</div>
		</header>
		<nav>
			<ul>
				<li>Home</li>
				<li>SCAUQ</li>
				<li>Contactenos</li>
			</ul>
		</nav>
		
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<footer>
			<div id="contenedorFooter">
				<?php echo $this->Html->image('footer.png',array('alt'=>'SCA-UQ','style'=>'width:100%; height:100%;')) ;?>
			
				
							
			</div>
		</footer>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>

</html>