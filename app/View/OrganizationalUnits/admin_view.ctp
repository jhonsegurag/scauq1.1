<div class="organizationalUnits view">
<h2><?php echo __('Organizational Unit'); ?></h2>
	<dl>
		<dt><?php echo __('IdOrganizationalUnit'); ?></dt>
		<dd>
			<?php echo h($organizationalUnit['OrganizationalUnit']['idOrganizationalUnit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($organizationalUnit['OrganizationalUnit']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Unidad Organizacional'); ?></dt>
		<dd>
			<?php echo h($organizationalUnit['OrganizationalUnit']['id_Unidad_Organizacional']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organizational Unit'), array('action' => 'edit', $organizationalUnit['OrganizationalUnit']['idOrganizationalUnit'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organizational Unit'), array('action' => 'delete', $organizationalUnit['OrganizationalUnit']['idOrganizationalUnit']), null, __('Are you sure you want to delete # %s?', $organizationalUnit['OrganizationalUnit']['idOrganizationalUnit'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizational Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizational Unit'), array('action' => 'add')); ?> </li>
	</ul>
</div>
