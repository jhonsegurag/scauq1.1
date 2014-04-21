<div class="stateTasks index">
	<h2><?php echo __('State Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idstate_tasks'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($stateTasks as $stateTask): ?>
	<tr>
		<td><?php echo h($stateTask['StateTask']['idstate_tasks']); ?>&nbsp;</td>
		<td><?php echo h($stateTask['StateTask']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stateTask['StateTask']['idstate_tasks'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stateTask['StateTask']['idstate_tasks'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stateTask['StateTask']['idstate_tasks']), null, __('Are you sure you want to delete # %s?', $stateTask['StateTask']['idstate_tasks'])); ?>
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
		<li><?php echo $this->Html->link(__('New State Task'), array('action' => 'add')); ?></li>
	</ul>
</div>
