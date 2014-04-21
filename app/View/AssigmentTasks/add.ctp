<div class="assigmentTasks form">
<?php echo $this->Form->create('AssigmentTask'); ?>
	<fieldset>
		<legend><?php echo __('Add Assigment Task'); ?></legend>
	<?php
		echo $this->Form->input('fecha_registro');
		echo $this->Form->input('id_Actividad');
		echo $this->Form->input('id_Tarea');
		echo $this->Form->input('id_Asignado_Por');
		echo $this->Form->input('id_Asignado_A');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assigment Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
