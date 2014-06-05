<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		
		
		<li><?php echo $this->Html->link('Volver', array('controller' => 'contributors','action'=>'mytasks')); ?></li>
		
		<li><?php echo $this->Html->link('Inicio', array('controller' => 'contributors','action'=>'index')); ?></li>
		
		
	</ul>
</div>
<div class="hacerTarea index">
	<h2>Realizar Tarea</h2>
	
	<?php  echo $this->Form->create('FileTask',array('type'=>'file')); ?>
	
	
	
	
</div>