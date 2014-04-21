<div class="organizationalUnits index">
	<h2><?php echo __('Organizational Units'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idOrganizationalUnit'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('idUnidadOrganizacional'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organizationalUnits as $organizationalUnit): ?>
	<tr>
		<td><?php echo h($organizationalUnit['OrganizationalUnit']['idOrganizationalUnit']); ?>&nbsp;</td>
		<td><?php echo h($organizationalUnit['OrganizationalUnit']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($organizationalUnit['OrganizationalUnit']['idUnidadOrganizacional']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $organizationalUnit['OrganizationalUnit']['idOrganizationalUnit'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organizationalUnit['OrganizationalUnit']['idOrganizationalUnit'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $organizationalUnit['OrganizationalUnit']['idOrganizationalUnit']), null, __('Are you sure you want to delete # %s?', $organizationalUnit['OrganizationalUnit']['idOrganizationalUnit'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Organizational Unit'), array('action' => 'add')); ?></li>
	</ul>
</div>
