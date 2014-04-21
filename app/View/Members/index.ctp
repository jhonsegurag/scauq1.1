<section id="container">
	<article>
		<header>
			<h1>¡Bienvenido!</h1>
		</header>
		<section>
			<div id="miembro">
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionusuario.png'),array('controller'=>'users','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Usuarios')); ?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionactividad.png'),array('controller'=>'activities','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion Actividades')); ?>
					</div>
					
					
					
				</div>
				
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/asignaractividad.png'),array('controller'=>'assigmentactivities','action'=>'index'),array('escapeTitle' => false,'title' => 'Asignar Actividad')); ?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/hacerseguimiento.png'),array('controller'=>'assigmentactivities','action'=>'index'),array('escapeTitle' => false,'title' => 'Seguimiento Actividad')); ?>
					</div>
					
				</div>
				
			</div>
		</section>
		<footer>
			
		</footer>	
	</article>
</section>