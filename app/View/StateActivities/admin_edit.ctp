<div class="stateActivities form">
<?php echo $this->Form->create('StateActivity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit State Activity'); ?></legend>
	<?php
		echo $this->Form->input('idStateActivities');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StateActivity.idStateActivities')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StateActivity.idStateActivities'))); ?></li>
		<li><?php echo $this->Html->link(__('List State Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
