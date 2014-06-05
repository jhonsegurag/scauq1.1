<nav id="menuAdministrador">
	<ul>
		<li>Inicio</li>
		<!--<li><?php //echo $this->Html->link('Gestion Tareas', array('controller' => 'tasks','action'=>'index')); ?></li>
		<li><?php //echo $this->Html->link('Gestion Pasos', array('controller' => 'steps','action'=>'index')); ?></li>
		<li><?php //echo $this->Html->link('Asignar Tarea', array('controller' => 'assigmenttasks','action'=>'index')); ?></li>
		<li><?php //echo $this->Html->link('Realizar Seguimiento', array('action'=>'tracingActivities')); ?></li></-->
		<li><?php echo $this->Html->link('Cerrar Sesion', array('controller' => 'users','action'=>'logout')); ?></li>				
	</ul>
</nav>
<section id="container">
	<article>
		<header>
			<h1>¡Bienvenido Integrante De Comité!</h1>
		</header>
		<section>
			<div id="miembro">
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestiontarea.png'),array('controller'=>'tasks','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Tareas')); 
								echo 'Gestion de Tareas';?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionpaso.png'),array('controller'=>'steps','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Pasos')); 
								echo 'Gestion de Pasos';?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/gestionarchivo.png'),array('controller'=>'filetasks','action'=>'index'),array('escapeTitle' => false,'title' => 'Gestion De Documentos'));
								echo 'Gestion Documentos'; ?>
					</div>
					
				</div>
				
				<div class="funciones">
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/asignartarea.png'),array('controller'=>'assigmenttasks','action'=>'index'),array('escapeTitle' => false,'title' => 'Asignar Tarea')); 
								echo 'Asignar Tarea'?>
					</div>
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/seguimientotarea.png'),array('action'=>'tracingActivities'),array('escapeTitle' => false,'title' => 'Seguimiento Tarea')); 
								echo 'Seguimiento de Tarea'?>
					</div>
					
					
					<div class="funcion">
					<?php echo $this->Html->link($this->Html->image('administrador/reporte.png'),array('controller'=>'ReportTasks','action'=>'reporteGeneral'),array('escapeTitle' => false,'title' => 'Reporte General')); 
								echo 'Reporte General'?>
					</div>
					
				</div>
				
			</div>
		</section>
		<footer>
			
		</footer>	
	</article>
</section>