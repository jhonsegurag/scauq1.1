<nav id="menuAdministrador">
	<ul>
		<li>Inicio</li>
		<!--<li><?php //echo $this->Html->link('Gestion Usuarios', array('controller' => 'users','action'=>'index')); ?></li>
		<li><?php //echo $this->Html->link('Gestion Actividades', array('controller' => 'activities','action'=>'index')); ?></li>
		<li><?php //echo $this->Html->link('Asignar Actividad', array('controller' => 'assigmentactivities','action'=>'index')); ?></li>
		<li><?php //echo $this->Html->link('Realizar Seguimiento', array('action'=>'tracingActivities')); ?></li></-->	
		<li><?php echo $this->Html->link('Cerrar Sesion', array('controller' => 'users','action'=>'logout')); ?></li>			
	</ul>
</nav>
<section id="container">
	<article>
		<header>
			<h1>¡Bienvenido Administrador!</h1>
		</header>
		<section>
			<div id="administrador">
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionusuario.png'),array('controller'=>'users','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Usuarios')); 
								echo '    Gestion de Usuarios';?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionactividad.png'),array('controller'=>'activities','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion Actividades')); 
								echo '    Gestion de Actividades';?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionunidadorganizacional.png'),array('controller'=>'organizationalUnits','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion Unidad Organizacional')); 
								echo '    Gestion Unidad Organizacional';?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionrol.png'),array('controller'=>'roles','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Roles')); 
								echo '    Gestion de Roles';?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionarchivo.png'),array('controller'=>'fileactivities','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Archivos')); 
								echo '    Gestion de Archivos';?>
					</div>
					
				</div>
				
				<div class="funciones"></div>
				<div class="funciones"></div>
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/asignaractividad.png'),array('controller'=>'assigmentactivities','action'=>'index'),array('escapeTitle' => false,'title' => 'Asignar Actividad')); 
							echo '    Asignar Actividad';?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/seguimientoactividad.png'),array('action'=>'tracingActivities'),array('escapeTitle' => false,'title' => 'Seguimiento Actividad')); 
					echo '    Seguimiento de Actividades';?>
					</div>
					
				</div>
				
			</div>
		</section>
		<footer>
			
		</footer>	
	</article>
</section>