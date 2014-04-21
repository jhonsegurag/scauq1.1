<div class="assigmentTasks form">
<?php echo $this->Form->create('AssigmentTask'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Assigment Task'); ?></legend>
	<?php
		echo $this->Form->input('idActivitiesTasks');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssigmentTask.idActivitiesTasks')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssigmentTask.idActivitiesTasks'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assigment Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
