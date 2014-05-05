<div class="stateReportsTasks view">
<h2><?php echo __('State Reports Task'); ?></h2>
	<dl>
		<dt><?php echo __('IdStateReportsTasks'); ?></dt>
		<dd>
			<?php echo h($stateReportsTask['StateReportsTask']['idStateReportsTasks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($stateReportsTask['StateReportsTask']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State Reports Task'), array('action' => 'edit', $stateReportsTask['StateReportsTask']['idStateReportsTasks'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State Reports Task'), array('action' => 'delete', $stateReportsTask['StateReportsTask']['idStateReportsTasks']), null, __('Are you sure you want to delete # %s?', $stateReportsTask['StateReportsTask']['idStateReportsTasks'])); ?> </li>
		<li><?php echo $this->Html->link(__('List State Reports Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State Reports Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
