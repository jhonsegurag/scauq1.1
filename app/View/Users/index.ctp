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
<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idUser'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('idUnidadOrganizacional'); ?></th>
			<th><?php echo $this->Paginator->sort('idRol'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['idUser']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['idUnidadOrganizacional']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['idRol']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['idUser'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['idUser'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['idUser']), null, __('Are you sure you want to delete # %s?', $user['User']['idUser'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
	</ul>
</div>
