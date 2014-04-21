<div class="stateActivities form">
<?php echo $this->Form->create('StateActivity'); ?>
	<fieldset>
		<legend><?php echo __('Add State Activity'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List State Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
