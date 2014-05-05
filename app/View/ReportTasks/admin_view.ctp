<div class="reportTasks view">
<h2><?php echo __('Report Task'); ?></h2>
	<dl>
		<dt><?php echo __('IdReportTasks'); ?></dt>
		<dd>
			<?php echo h($reportTask['ReportTask']['idReportTasks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($reportTask['ReportTask']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdEstadoReporteTarea'); ?></dt>
		<dd>
			<?php echo h($reportTask['ReportTask']['idEstadoReporteTarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tracking Task IdTrackingTask'); ?></dt>
		<dd>
			<?php echo h($reportTask['ReportTask']['tracking_task_idTrackingTask']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Report Task'), array('action' => 'edit', $reportTask['ReportTask']['idReportTasks'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Report Task'), array('action' => 'delete', $reportTask['ReportTask']['idReportTasks']), null, __('Are you sure you want to delete # %s?', $reportTask['ReportTask']['idReportTasks'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Report Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
