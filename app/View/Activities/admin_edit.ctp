<div class="activities form">
<?php echo $this->Form->create('Activity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Activity'); ?></legend>
	<?php
		echo $this->Form->input('idActivities');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('dirigido');
		echo $this->Form->input('fechaInicio');
		echo $this->Form->input('fechaFin');
		echo $this->Form->input('afecta');
		echo $this->Form->input('fuentesInformacion');
		echo $this->Form->input('proceso');
		echo $this->Form->input('idEstadoActividad');
		echo $this->Form->input('idArchivoEntregableActividad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Activity.idActivities')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Activity.idActivities'))); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
