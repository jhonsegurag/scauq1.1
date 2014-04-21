<div class="assigmentActivities view">
<h2><?php echo __('Assigment Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Idusers Activities'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['idusers_activities']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activities Idactivities'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['activities_idactivities']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users Idusers'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['users_idusers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Asiganacion'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['fecha_asiganacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assigment Activity'), array('action' => 'edit', $assigmentActivity['AssigmentActivity']['idusers_activities'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assigment Activity'), array('action' => 'delete', $assigmentActivity['AssigmentActivity']['idusers_activities']), null, __('Are you sure you want to delete # %s?', $assigmentActivity['AssigmentActivity']['idusers_activities'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assigment Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assigment Activity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
