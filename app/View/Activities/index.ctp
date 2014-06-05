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

<div class="activities index">
	<h2><?php echo __('Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idActivities'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('dirigido'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaInicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaFin'); ?></th>
			<th><?php echo $this->Paginator->sort('afecta'); ?></th>
			<th><?php echo $this->Paginator->sort('fuentesInformacion'); ?></th>
			<th><?php echo $this->Paginator->sort('proceso'); ?></th>
			<th><?php echo $this->Paginator->sort('idEstadoActividad'); ?></th>
			<th><?php echo $this->Paginator->sort('idArchivoEntregableActividad'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activities as $activity): ?>
	<tr>
		<td><?php echo h($activity['Activity']['idActivities']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['dirigido']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['fechaInicio']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['fechaFin']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['afecta']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['fuentesInformacion']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['proceso']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['idEstadoActividad']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['idArchivoEntregableActividad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activity['Activity']['idActivities'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activity['Activity']['idActivities'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activity['Activity']['idActivities']), null, __('Are you sure you want to delete # %s?',
			 $activity['Activity']['idActivities'])); ?>
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
		<li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?></li>
	</ul>
</div>
