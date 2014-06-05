<div class="fileActivities form">
<?php echo $this->Form->create('FileActivity',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add File Activity'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('archivo',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List File Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
