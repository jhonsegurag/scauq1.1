<div class="stateReportsTasks form">
<?php echo $this->Form->create('StateReportsTask'); ?>
	<fieldset>
		<legend><?php echo __('Edit State Reports Task'); ?></legend>
	<?php
		echo $this->Form->input('idStateReportsTasks');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StateReportsTask.idStateReportsTasks')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StateReportsTask.idStateReportsTasks'))); ?></li>
		<li><?php echo $this->Html->link(__('List State Reports Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
