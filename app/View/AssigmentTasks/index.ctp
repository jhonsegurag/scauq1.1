<nav id="menuAdministrador">
	<ul>
		<li>Inicio</li>
		<li><?php echo $this->Html->link('Gestion Usuarios', array('controller' => 'users','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Gestion Actividades', array('controller' => 'activities','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Asignar Actividad', array('controller' => 'assigmentactivities','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Realizar Seguimiento', array('controller' => 'admins','action'=>'tracingActivities')); ?></li>
		<li><?php echo $this->Html->link('Cerrar Sesion', array('controller' => 'users','action'=>'logout')); ?></li>			
	</ul>
</nav>
<div class="assigmentTasks index">
	<h2><?php echo __('Assigment Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idActivitiesTasks'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaRegistro'); ?></th>
			<th><?php echo $this->Paginator->sort('idActividad'); ?></th>
			<th><?php echo $this->Paginator->sort('idTarea'); ?></th>
			<th><?php echo $this->Paginator->sort('idAsignadoPor'); ?></th>
			<th><?php echo $this->Paginator->sort('idAsignadoA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assigmentTasks as $assigmentTask): ?>
	<tr>
		<td><?php echo h($assigmentTask['AssigmentTask']['idActivitiesTasks']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['fechaRegistro']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['idActividad']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['idTarea']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['idAsignadoPor']); ?>&nbsp;</td>
		<td><?php echo h($assigmentTask['AssigmentTask']['idAsignadoA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assigmentTask['AssigmentTask']['idActivitiesTasks'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assigmentTask['AssigmentTask']['idActivitiesTasks'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assigmentTask['AssigmentTask']['idActivitiesTasks']), null, __('Are you sure you want to delete # %s?', $assigmentTask['AssigmentTask']['idActivitiesTasks'])); ?>
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
		<li><?php echo $this->Html->link(__('New Assigment Task'), array('action' => 'add')); ?></li>
	</ul>
</div>
