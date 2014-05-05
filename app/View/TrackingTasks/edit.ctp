<div class="trackingTasks form">
<?php echo $this->Form->create('TrackingTask'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tracking Task'); ?></legend>
	<?php
		echo $this->Form->input('idTrackingTask');
		echo $this->Form->input('usernameResponsable');
		echo $this->Form->input('fechaActual');
		echo $this->Form->input('nombreTarea');
		echo $this->Form->input('estadoTarea');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrackingTask.idTrackingTask')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TrackingTask.idTrackingTask'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tracking Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
