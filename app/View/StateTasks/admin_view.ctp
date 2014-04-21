<div class="stateTasks view">
<h2><?php echo __('State Task'); ?></h2>
	<dl>
		<dt><?php echo __('Idstate Tasks'); ?></dt>
		<dd>
			<?php echo h($stateTask['StateTask']['idstate_tasks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($stateTask['StateTask']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State Task'), array('action' => 'edit', $stateTask['StateTask']['idstate_tasks'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State Task'), array('action' => 'delete', $stateTask['StateTask']['idstate_tasks']), null, __('Are you sure you want to delete # %s?', $stateTask['StateTask']['idstate_tasks'])); ?> </li>
		<li><?php echo $this->Html->link(__('List State Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
