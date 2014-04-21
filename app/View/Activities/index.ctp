<div class="activities index">

	<h2><?php echo __('Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idactivities'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('dirigido'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaInicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaFin'); ?></th>
			<th><?php echo $this->Paginator->sort('afecta'); ?></th>
			<th><?php echo $this->Paginator->sort('fuentes_informacion'); ?></th>
			<th><?php echo $this->Paginator->sort('proceso'); ?></th>
			<th><?php echo $this->Paginator->sort('id_Estado_Actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('id_Archivo_Entregable_Actividad'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activities as $activity): ?>
	<tr>
		<td><?php echo h($activity['Activity']['idactivities']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['dirigido']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['fechaInicio']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['fechaFin']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['afecta']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['fuentes_informacion']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['proceso']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['id_Estado_Actividad']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['id_Archivo_Entregable_Actividad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activity['Activity']['idactivities'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activity['Activity']['idactivities'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activity['Activity']['idactivities']), null, __('Are you sure you want to delete # %s?', $activity['Activity']['idactivities'])); ?>
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
		<li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?></li>
	</ul>
</div>
