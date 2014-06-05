<nav id="menuAdministrador">
	<ul>
		<li>Inicio</li>
		<li><?php echo $this->Html->link('Gestion Tareas', array('controller' => 'tasks','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Gestion Pasos', array('controller' => 'steps','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Asignar Tarea', array('controller' => 'assigmenttasks','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Realizar Seguimiento', array('action'=>'tracingActivities')); ?></li>
		<li><?php echo $this->Html->link('Cerrar Sesion', array('controller' => 'users','action'=>'logout')); ?></li>				
	</ul>
<div class="steps index">
	<h2><?php echo __('Steps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idsteps'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('idTarea'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($steps as $step): ?>
	<tr>
		<td><?php echo h($step['Step']['idsteps']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($step['Step']['idTarea']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $step['Step']['idsteps'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $step['Step']['idsteps'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $step['Step']['idsteps']), null, __('Are you sure you want to delete # %s?', $step['Step']['idsteps'])); ?>
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
		<li><?php echo $this->Html->link(__('New Step'), array('action' => 'add')); ?></li>
	</ul>
</div>
