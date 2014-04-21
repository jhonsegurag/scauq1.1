<div class="fileTasks form">
<?php echo $this->Form->create('FileTask'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add File Task'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('ruta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List File Tasks'), array('action' => 'index')); ?></li>
	</ul>
</div>
