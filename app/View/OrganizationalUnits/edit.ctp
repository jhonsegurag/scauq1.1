<div class="organizationalUnits form">
<?php echo $this->Form->create('OrganizationalUnit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Organizational Unit'); ?></legend>
	<?php
		echo $this->Form->input('idOrganizationalUnit');
		echo $this->Form->input('nombre');
		echo $this->Form->input('id_Unidad_Organizacional');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrganizationalUnit.idOrganizationalUnit')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrganizationalUnit.idOrganizationalUnit'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organizational Units'), array('action' => 'index')); ?></li>
	</ul>
</div>
