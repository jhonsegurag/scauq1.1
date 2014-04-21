<div class="stateActivities index">
	<h2><?php echo __('State Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idstate_activities'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($stateActivities as $stateActivity): ?>
	<tr>
		<td><?php echo h($stateActivity['StateActivity']['idstate_activities']); ?>&nbsp;</td>
		<td><?php echo h($stateActivity['StateActivity']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stateActivity['StateActivity']['idstate_activities'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stateActivity['StateActivity']['idstate_activities'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stateActivity['StateActivity']['idstate_activities']), null, __('Are you sure you want to delete # %s?', $stateActivity['StateActivity']['idstate_activities'])); ?>
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
		<li><?php echo $this->Html->link(__('New State Activity'), array('action' => 'add')); ?></li>
	</ul>
</div>
