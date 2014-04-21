<div class="fileActivities view">
<h2><?php echo __('File Activity'); ?></h2>
	<dl>
		<dt><?php echo __('IdFileActivities'); ?></dt>
		<dd>
			<?php echo h($fileActivity['FileActivity']['idFileActivities']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($fileActivity['FileActivity']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo h($fileActivity['FileActivity']['ruta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit File Activity'), array('action' => 'edit', $fileActivity['FileActivity']['idFileActivities'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete File Activity'), array('action' => 'delete', $fileActivity['FileActivity']['idFileActivities']), null, __('Are you sure you want to delete # %s?', $fileActivity['FileActivity']['idFileActivities'])); ?> </li>
		<li><?php echo $this->Html->link(__('List File Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Activity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
