<div class="assigmentActivities form">
<?php echo $this->Form->create('AssigmentActivity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Assigment Activity'); ?></legend>
	<?php
		echo $this->Form->input('idAssigment_activities');
		echo $this->Form->input('fecha_asiganacion');
		echo $this->Form->input('id_Actividad');
		echo $this->Form->input('id_Asignado_Por');
		echo $this->Form->input('id_Asignado_A');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssigmentActivity.idAssigment_activities')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssigmentActivity.idAssigment_activities'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assigment Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
