<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		
		
		<li><?php echo $this->Html->link('Cancelar', array('controller' => 'contributors','action'=>'mytasks')); ?></li>
		
		
		
		
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
		echo $this->Form->input('idTarea',array('type'=>'hidden','value'=>$idTarea));
	?>
	
	<?php echo $this->Form->end(__('Enviar para revisión')); ?>
	</fieldset>
	
</div>