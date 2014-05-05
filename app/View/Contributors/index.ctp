<section id="container">
	<article>
		<header>
			<h1>¡Bienvenido!</h1>
		</header>
		<section>
			<div id="miembro">
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/vermistareas.png'),array('controller'=>'contributors','action'=>'tasks'),array('escapeTitle' => false,'title' => 'Ver Mis Tareas')); ?>
					</div>
					
					
					
					
					
				</div>
				
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/asignartarea.png'),array('controller'=>'assigmenttasks','action'=>'index'),array('escapeTitle' => false,'title' => 'Asignar Tarea')); ?>
					</div>
					
					
					
				</div>
				
			</div>
		</section>
		<footer>
			
		</footer>	
	</article>
</section>