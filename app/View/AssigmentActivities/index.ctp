<div class="assigmentActivities index">
	<h2><?php echo __('Assigment Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idAssigmentActivities'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaAsignacion'); ?></th>
			<th><?php echo $this->Paginator->sort('idActividad'); ?></th>
			<th><?php echo $this->Paginator->sort('idAsignadoPor'); ?></th>
			<th><?php echo $this->Paginator->sort('idAsignadoA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assigmentActivities as $assigmentActivity): ?>
	<tr>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['idAssigmentActivities']); ?>&nbsp;</td>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['fechaAsignacion']); ?>&nbsp;</td>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['idActividad']); ?>&nbsp;</td>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['idAsignadoPor']); ?>&nbsp;</td>
		<td><?php echo h($assigmentActivity['AssigmentActivity']['idAsignadoA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assigmentActivity['AssigmentActivity']['idAssigmentActivities'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assigmentActivity['AssigmentActivity']['idAssigmentActivities'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assigmentActivity['AssigmentActivity']['idAssigmentActivities']), null, __('Are you sure you want to delete # %s?', $assigmentActivity['AssigmentActivity']['idAssigmentActivities'])); ?>
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
		<li><?php echo $this->Html->link('Inicio', array('controller' => 'admins','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Assigment Activity'), array('action' => 'add')); ?></li>
	</ul>
</div>
