<div class="assigmentActivities form">
<?php echo $this->Form->create('AssigmentActivity'); ?>
	<fieldset>
		<legend><?php echo __('Edit Assigment Activity'); ?></legend>
	<?php
		echo $this->Form->input('idAssigmentActivities');
		echo $this->Form->input('fechaAsignacion');
		echo $this->Form->input('idActividad');
		echo $this->Form->input('idAsignadoPor');
		echo $this->Form->input('idAsignadoA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssigmentActivity.idAssigmentActivities')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssigmentActivity.idAssigmentActivities'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assigment Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
