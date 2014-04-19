<div class="organizationalUnits view">
<h2><?php echo __('Organizational Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Idprograms'); ?></dt>
		<dd>
			<?php echo h($organizationalUnit['OrganizationalUnit']['idprograms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($organizationalUnit['OrganizationalUnit']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($organizationalUnit['OrganizationalUnit']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organizational Units Idprograms'); ?></dt>
		<dd>
			<?php echo h($organizationalUnit['OrganizationalUnit']['organizational_units_idprograms']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organizational Unit'), array('action' => 'edit', $organizationalUnit['OrganizationalUnit']['idprograms'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organizational Unit'), array('action' => 'delete', $organizationalUnit['OrganizationalUnit']['idprograms']), null, __('Are you sure you want to delete # %s?', $organizationalUnit['OrganizationalUnit']['idprograms'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizational Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizational Unit'), array('action' => 'add')); ?> </li>
	</ul>
</div>
