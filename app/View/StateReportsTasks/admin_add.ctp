<div class="stateReportsTasks form">
<?php echo $this->Form->create('StateReportsTask'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add State Reports Task'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List State Reports Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
