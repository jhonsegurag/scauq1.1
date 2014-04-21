<div class="assigmentActivities index">
	<h2><?php echo __('Assigment Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idusers_activities'); ?></th>
			<th><?php echo $this->Paginator->sort('activities_idactivities'); ?></th>
			<th><?php echo $this->Paginator->sort('users_idusers'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_asiganacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assigmentActivities as $assigmentActivity): ?>
	<tr>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['idusers_activities']); ?>&nbsp;</td>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['activities_idactivities']); ?>&nbsp;</td>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['users_idusers']); ?>&nbsp;</td>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['fecha_asiganacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assigmentActivity['AssigmentActivity']['idusers_activities'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assigmentActivity['AssigmentActivity']['idusers_activities'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assigmentActivity['AssigmentActivity']['idusers_activities']), null, __('Are you sure you want to delete # %s?', $assigmentActivity['AssigmentActivity']['idusers_activities'])); ?>
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
		<li><?php echo $this->Html->link(__('New Assigment Activity'), array('action' => 'add')); ?></li>
	</ul>
</div>
