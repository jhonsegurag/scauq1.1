<div class="assigmentActivities view">
<h2><?php echo __('Assigment Activity'); ?></h2>
	<dl>
		<dt><?php echo __('IdAssigment Activities'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['idAssigment_activities']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Asiganacion'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['fecha_asiganacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Actividad'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['id_Actividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Asignado Por'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['id_Asignado_Por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Asignado A'); ?></dt>
		<dd>
			<?php echo h($assigmentActivity['AssigmentActivity']['id_Asignado_A']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assigment Activity'), array('action' => 'edit', $assigmentActivity['AssigmentActivity']['idAssigment_activities'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assigment Activity'), array('action' => 'delete', $assigmentActivity['AssigmentActivity']['idAssigment_activities']), null, __('Are you sure you want to delete # %s?', $assigmentActivity['AssigmentActivity']['idAssigment_activities'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assigment Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assigment Activity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
