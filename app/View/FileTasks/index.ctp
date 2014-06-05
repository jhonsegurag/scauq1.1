<div class="fileTasks index">
	<h2><?php echo __('File Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idfiles'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('ruta'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fileTasks as $fileTask): ?>
	<tr>
		<td><?php echo h($fileTask['FileTask']['idFiles']); ?>&nbsp;</td>
		<td><?php echo h($fileTask['FileTask']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($fileTask['FileTask']['ruta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fileTask['FileTask']['idFiles'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fileTask['FileTask']['idFiles'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fileTask['FileTask']['idFiles']), null, __('Are you sure you want to delete # %s?', $fileTask['FileTask']['idFiles'])); ?>
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
		<li><?php echo $this->Html->link('Inicio', array('controller' => 'members','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link(__('New File Task'), array('action' => 'add')); ?></li>
	</ul>
</div>
