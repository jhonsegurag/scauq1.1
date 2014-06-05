<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		
		
		<li><?php echo $this->Html->link('Volver', array('controller' => 'contributors','action'=>'mytasks')); ?></li>
		
		<li><?php echo $this->Html->link('Inicio', array('controller' => 'contributors','action'=>'index')); ?></li>
		
		
	</ul>
</div>
<div class="hacerTarea indexResize">
	<h2>Realizar Tarea</h2>
	
	<?php  echo $this->Form->create('FileTask', array('type'=>'file',
    'url' => array('controller' => 'filetasks', 'action' => 'addreview')
)); ?>
	<fieldset>
		<legend><?php echo __(''); ?></legend>
	<?php
	
		echo $this->Form->input('nombre');
		echo $this->Form->input('archivo',array('type'=>'file'));
	?>
	
	<?php //echo $this->Form->end(__('Enviar para revisión')); 
					echo $this->Html->link('Enviar Revision', array('controller' => 'contributors','action'=>'hacer')); 
	?>
	</fieldset>
	
</div>