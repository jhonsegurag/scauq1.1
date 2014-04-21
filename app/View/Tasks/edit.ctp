<div class="tasks form">
<?php echo $this->Form->create('Task'); ?>
	<fieldset>
		<legend><?php echo __('Edit Task'); ?></legend>
	<?php
		echo $this->Form->input('idtasks');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('entregable');
		echo $this->Form->input('id_Estado_Tarea');
		echo $this->Form->input('id_Archivo_Entregable_Tarea');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Task.idtasks')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Task.idtasks'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
