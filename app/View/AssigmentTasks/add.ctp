<div class="assigmentTasks form">
<?php echo $this->Form->create('AssigmentTask'); ?>
	<fieldset>
		<legend><?php echo __('Add Assigment Task'); ?></legend>
	<?php
		echo $this->Form->input('fechaRegistro');
		echo $this->Form->input('idActividad');
		echo $this->Form->input('idTarea');
		echo $this->Form->input('idAsignadoPor');
		echo $this->Form->input('idAsignadoA');
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
