<div class="trackingTasks index">
	<h2><?php echo __('Tracking Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idTrackingTask'); ?></th>
			<th><?php echo $this->Paginator->sort('usernameResponsable'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaActual'); ?></th>
			<th><?php echo $this->Paginator->sort('nombreTarea'); ?></th>
			<th><?php echo $this->Paginator->sort('estadoTarea'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trackingTasks as $trackingTask): ?>
	<tr>
		<td><?php echo h($trackingTask['TrackingTask']['idTrackingTask']); ?>&nbsp;</td>
		<td><?php echo h($trackingTask['TrackingTask']['usernameResponsable']); ?>&nbsp;</td>
		<td><?php echo h($trackingTask['TrackingTask']['fechaActual']); ?>&nbsp;</td>
		<td><?php echo h($trackingTask['TrackingTask']['nombreTarea']); ?>&nbsp;</td>
		<td><?php echo h($trackingTask['TrackingTask']['estadoTarea']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trackingTask['TrackingTask']['idTrackingTask'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trackingTask['TrackingTask']['idTrackingTask'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trackingTask['TrackingTask']['idTrackingTask']), null, __('Are you sure you want to delete # %s?', $trackingTask['TrackingTask']['idTrackingTask'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tracking Task'), array('action' => 'add')); ?></li>
	</ul>
</div>
