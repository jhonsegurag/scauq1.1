<div class="tasks form">
<?php echo $this->Form->create('Task'); ?>
	<fieldset>
		<legend><?php echo __('Edit Task'); ?></legend>
	<?php
		echo $this->Form->input('idTasks');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('entregable',array('label'=>'Tipo Entregable'));
		echo $this->Form->input('idEstadoTarea',array('label'=>'Estado Tarea','class'=>'input select','type'=>'select','options'=>$stateTasks,'empty'=>false));
		echo $this->Form->input('idArchivoEntregableTarea',array('label'=>'Archivo Entregable Cargado','class'=>'','type'=>'select','options'=>$fileTasks,'empty'=>false));
	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Task.idTasks')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Task.idTasks'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
