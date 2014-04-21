<div class="assigmentTasks view">
<h2><?php echo __('Assigment Task'); ?></h2>
	<dl>
		<dt><?php echo __('IdActivitiesTasks'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['idActivitiesTasks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaRegistro'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['fechaRegistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdActividad'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['idActividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdTarea'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['idTarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdAsignadoPor'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['idAsignadoPor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdAsignadoA'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['idAsignadoA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assigment Task'), array('action' => 'edit', $assigmentTask['AssigmentTask']['idActivitiesTasks'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assigment Task'), array('action' => 'delete', $assigmentTask['AssigmentTask']['idActivitiesTasks']), null, __('Are you sure you want to delete # %s?', $assigmentTask['AssigmentTask']['idActivitiesTasks'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assigment Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assigment Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
