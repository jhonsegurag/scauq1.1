<div class="reportTasks index">
	<h2><?php echo __('Report Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idReportTasks'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('idEstadoReporteTarea'); ?></th>
			<th><?php echo $this->Paginator->sort('tracking_task_idTrackingTask'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reportTasks as $reportTask): ?>
	<tr>
		<td><?php echo h($reportTask['ReportTask']['idReportTasks']); ?>&nbsp;</td>
		<td><?php echo h($reportTask['ReportTask']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($reportTask['ReportTask']['idEstadoReporteTarea']); ?>&nbsp;</td>
		<td><?php echo h($reportTask['ReportTask']['tracking_task_idTrackingTask']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reportTask['ReportTask']['idReportTasks'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reportTask['ReportTask']['idReportTasks'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reportTask['ReportTask']['idReportTasks']), null, __('Are you sure you want to delete # %s?', $reportTask['ReportTask']['idReportTasks'])); ?>
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
		<li><?php echo $this->Html->link(__('New Report Task'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Reporte General'), array('action' => 'reporteGeneral')); ?></li>
		<li><?php echo $this->Html->link(__('Reporte Estadistico'), array('action' => 'reporteEstadistico')); ?></li>
	</ul>
</div>
