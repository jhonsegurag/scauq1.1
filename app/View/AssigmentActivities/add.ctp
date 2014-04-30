<div class="assigmentActivities form">
<?php echo $this->Form->create('AssigmentActivity'); ?>
	<fieldset>
		<legend><?php echo __('Add Assigment Activity'); ?></legend>
	<?php
			echo $this->Form->input('fechaAsignacion');
		echo $this->Form->input('idActividad',array('label'=>'Actividad','class'=>'','type'=>'select','options'=>$activities,'empty'=>false));
		echo $this->Form->input('idAsignadoPor',array('label'=>'Asignado Por:','class'=>'','type'=>'select','options'=>$users,'empty'=>false));
		echo $this->Form->input('idAsignadoA',array('label'=>'Asignado A:','class'=>'','type'=>'select','options'=>$users,'empty'=>false));
	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assigment Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
