<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->input('idUnidadOrganizacional',array('label'=>'Unidad Organizacional','class'=>'input select','type'=>'select','options'=>$organizationalUnits,'empty'=>false));
		echo $this->Form->input('idRol',array('label'=>'Rol','class'=>'','type'=>'select','options'=>$roles,'empty'=>false));
	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
