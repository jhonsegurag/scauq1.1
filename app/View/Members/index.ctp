<section id="container">
	<article>
		<header>
			<h1>¡Bienvenido!</h1>
		</header>
		<section>
			<div id="miembro">
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestiontarea.png'),array('controller'=>'tasks','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Tareas')); ?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionpaso.png'),array('controller'=>'steps','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Pasos')); ?>
					</div>
					
					
					
				</div>
				
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/asignartarea.png'),array('controller'=>'assigmenttasks','action'=>'index'),array('escapeTitle' => false,'title' => 'Asignar Tarea')); ?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/seguimientotarea.png'),array('controller'=>'assigmenttasks','action'=>'index'),array('escapeTitle' => false,'title' => 'Seguimiento Tarea')); ?>
					</div>
					
				</div>
				
			</div>
		</section>
		<footer>
			
		</footer>	
	</article>
</section>