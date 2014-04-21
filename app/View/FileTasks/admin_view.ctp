<div class="fileTasks view">
<h2><?php echo __('File Task'); ?></h2>
	<dl>
		<dt><?php echo __('Idfiles'); ?></dt>
		<dd>
			<?php echo h($fileTask['FileTask']['idfiles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($fileTask['FileTask']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo h($fileTask['FileTask']['ruta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit File Task'), array('action' => 'edit', $fileTask['FileTask']['idfiles'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete File Task'), array('action' => 'delete', $fileTask['FileTask']['idfiles']), null, __('Are you sure you want to delete # %s?', $fileTask['FileTask']['idfiles'])); ?> </li>
		<li><?php echo $this->Html->link(__('List File Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
