<section id="container">
	<article>
		<header>
			<h1>¡Bienvenido!</h1>
		</header>
		<section>
			<div id="administrador">
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionusuario.png'),array('controller'=>'users','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Usuarios')); ?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionactividad.png'),array('controller'=>'activities','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion Actividades')); ?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionunidadorganizacional.png'),array('controller'=>'organizationalUnits','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion Unidad Organizacional')); ?>	
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionrol.png'),array('controller'=>'roles','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Roles')); ?>	
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionarchivo.png'),array('controller'=>'fileactivities','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Archivos')); ?>	
					</div>
					
				</div>
				
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/asignaractividad.png'),array('controller'=>'assigmentactivities','action'=>'index'),array('escapeTitle' => false,'title' => 'Asignar Actividad')); ?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/seguimientoactividad.png'),array('action'=>'tracingActivities'),array('escapeTitle' => false,'title' => 'Seguimiento Actividad')); ?>
					</div>
					
				</div>
				
			</div>
		</section>
		<footer>
			
		</footer>	
	</article>
</section>