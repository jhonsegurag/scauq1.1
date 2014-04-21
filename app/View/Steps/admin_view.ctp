<div class="steps view">
<h2><?php echo __('Step'); ?></h2>
	<dl>
		<dt><?php echo __('Idsteps'); ?></dt>
		<dd>
			<?php echo h($step['Step']['idsteps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($step['Step']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdTarea'); ?></dt>
		<dd>
			<?php echo h($step['Step']['idTarea']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Step'), array('action' => 'edit', $step['Step']['idsteps'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Step'), array('action' => 'delete', $step['Step']['idsteps']), null, __('Are you sure you want to delete # %s?', $step['Step']['idsteps'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Steps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Step'), array('action' => 'add')); ?> </li>
	</ul>
</div>
