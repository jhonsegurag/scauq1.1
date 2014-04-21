<div class="assigmentTasks index">
	<h2><?php echo __('Assigment Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idactivities_tasks'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_registro'); ?></th>
			<th><?php echo $this->Paginator->sort('id_Actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('id_Tarea'); ?></th>
			<th><?php echo $this->Paginator->sort('id_Asignado_Por'); ?></th>
			<th><?php echo $this->Paginator->sort('id_Asignado_A'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assigmentTasks as $assigmentTask): ?>
	<tr>
		<td><?php echo h($assigmentTask['AssigmentTask']['idactivities_tasks']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['fecha_registro']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['id_Actividad']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['id_Tarea']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['id_Asignado_Por']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['id_Asignado_A']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assigmentTask['AssigmentTask']['idactivities_tasks'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assigmentTask['AssigmentTask']['idactivities_tasks'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assigmentTask['AssigmentTask']['idactivities_tasks']), null, __('Are you sure you want to delete # %s?', $assigmentTask['AssigmentTask']['idactivities_tasks'])); ?>
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
		<li><?php echo $this->Html->link(__('New Assigment Task'), array('action' => 'add')); ?></li>
	</ul>
</div>
