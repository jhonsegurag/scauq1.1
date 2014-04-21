<div class="assigmentActivities view">
<h2><?php echo __('Assigment Activity'); ?></h2>
	<dl>
		<dt><?php echo __('IdAssigmentActivities'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['idAssigmentActivities']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaAsignacion'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['fechaAsignacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdActividad'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['idActividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdAsignadoPor'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['idAsignadoPor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdAsignadoA'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['idAsignadoA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assigment Activity'), array('action' => 'edit', $assigmentActivity['AssigmentActivity']['idAssigmentActivities'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assigment Activity'), array('action' => 'delete', $assigmentActivity['AssigmentActivity']['idAssigmentActivities']), null, __('Are you sure you want to delete # %s?', $assigmentActivity['AssigmentActivity']['idAssigmentActivities'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assigment Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assigment Activity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
