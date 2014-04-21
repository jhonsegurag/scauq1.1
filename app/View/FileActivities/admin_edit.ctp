<div class="fileActivities form">
<?php echo $this->Form->create('FileActivity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit File Activity'); ?></legend>
	<?php
		echo $this->Form->input('idFileActivities');
		echo $this->Form->input('nombre');
		echo $this->Form->input('ruta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FileActivity.idFileActivities')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FileActivity.idFileActivities'))); ?></li>
		<li><?php echo $this->Html->link(__('List File Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
