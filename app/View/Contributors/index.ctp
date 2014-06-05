<nav id="menuAdministrador">
	<ul>
		<li>Inicio</li>
		<li><?php echo $this->Html->link('Mis Tareas', array('controller' => 'contributors','action'=>'mytasks')); ?></li>
		<li><?php echo $this->Html->link('Cerrar Sesion', array('controller' => 'users','action'=>'logout')); ?></li>				
	</ul>
</nav>
<section id="container">
	<article>
		<header>
			<h1>¡Bienvenido Colaborador De Comité!</h1>
		</header>
		<section>
			<div id="miembro">
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/vermistareas.png'),array('controller'=>'contributors','action'=>'mytasks'),array('escapeTitle' => false,'title' => 'Ver Mis Tareas')); ?>
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