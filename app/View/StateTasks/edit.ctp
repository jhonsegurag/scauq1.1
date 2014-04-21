<div class="stateTasks form">
<?php echo $this->Form->create('StateTask'); ?>
	<fieldset>
		<legend><?php echo __('Edit State Task'); ?></legend>
	<?php
		echo $this->Form->input('idStateTasks');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StateTask.idStateTasks')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StateTask.idStateTasks'))); ?></li>
		<li><?php echo $this->Html->link(__('List State Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
