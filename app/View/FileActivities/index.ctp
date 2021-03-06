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
<div class="fileActivities index">
	<h2><?php echo __('File Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idFileActivities'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('ruta'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fileActivities as $fileActivity): ?>
	<tr>
		<td><?php echo h($fileActivity['FileActivity']['idFileActivities']); ?>&nbsp;</td>
		<td><?php echo h($fileActivity['FileActivity']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($fileActivity['FileActivity']['ruta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fileActivity['FileActivity']['idFileActivities'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fileActivity['FileActivity']['idFileActivities'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fileActivity['FileActivity']['idFileActivities']), null, __('Are you sure you want to delete # %s?', $fileActivity['FileActivity']['idFileActivities'])); ?>
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
		<li><?php echo $this->Html->link(__('New File Activity'), array('action' => 'add')); ?></li>
	</ul>
</div>
