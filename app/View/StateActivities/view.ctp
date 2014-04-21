<div class="stateActivities view">
<h2><?php echo __('State Activity'); ?></h2>
	<dl>
		<dt><?php echo __('IdStateActivities'); ?></dt>
		<dd>
			<?php echo h($stateActivity['StateActivity']['idStateActivities']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($stateActivity['StateActivity']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State Activity'), array('action' => 'edit', $stateActivity['StateActivity']['idStateActivities'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State Activity'), array('action' => 'delete', $stateActivity['StateActivity']['idStateActivities']), null, __('Are you sure you want to delete # %s?', $stateActivity['StateActivity']['idStateActivities'])); ?> </li>
		<li><?php echo $this->Html->link(__('List State Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State Activity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
