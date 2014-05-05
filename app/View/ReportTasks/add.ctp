<div class="reportTasks form">
<?php echo $this->Form->create('ReportTask'); ?>
	<fieldset>
		<legend><?php echo __('Add Report Task'); ?></legend>
	<?php
		echo $this->Form->input('fecha');
		echo $this->Form->input('idEstadoReporteTarea');
		echo $this->Form->input('tracking_task_idTrackingTask');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Report Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
