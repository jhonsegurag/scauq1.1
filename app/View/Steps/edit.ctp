<div class="steps form">
<?php echo $this->Form->create('Step'); ?>
	<fieldset>
		<legend><?php echo __('Edit Step'); ?></legend>
	<?php
		echo $this->Form->input('idsteps');
		echo $this->Form->input('nombre');
		echo $this->Form->input('idTarea');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Step.idsteps')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Step.idsteps'))); ?></li>
		<li><?php echo $this->Html->link(__('List Steps'), array('action' => 'index')); ?></li>
	</ul>
</div>
