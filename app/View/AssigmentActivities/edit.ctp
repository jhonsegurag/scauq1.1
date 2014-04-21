<div class="assigmentActivities form">
<?php echo $this->Form->create('AssigmentActivity'); ?>
	<fieldset>
		<legend><?php echo __('Edit Assigment Activity'); ?></legend>
	<?php
		echo $this->Form->input('idusers_activities');
		echo $this->Form->input('activities_idactivities');
		echo $this->Form->input('users_idusers');
		echo $this->Form->input('fecha_asiganacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssigmentActivity.idusers_activities')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssigmentActivity.idusers_activities'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assigment Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
