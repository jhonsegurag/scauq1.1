<div class="organizationalUnits form">
<?php echo $this->Form->create('OrganizationalUnit'); ?>
	<fieldset>
		<legend><?php echo __('Add Organizational Unit'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('tipo');
		echo $this->Form->input('organizational_units_idprograms');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Organizational Units'), array('action' => 'index')); ?></li>
	</ul>
</div>
