<div class="assigmentTasks view">
<h2><?php echo __('Assigment Task'); ?></h2>
	<dl>
		<dt><?php echo __('Idactivities Tasks'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['idactivities_tasks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Registro'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['fecha_registro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Actividad'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['id_Actividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Tarea'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['id_Tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Asignado Por'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['id_Asignado_Por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Asignado A'); ?></dt>
		<dd>
			<?php echo h($assigmentTask['AssigmentTask']['id_Asignado_A']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assigment Task'), array('action' => 'edit', $assigmentTask['AssigmentTask']['idactivities_tasks'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assigment Task'), array('action' => 'delete', $assigmentTask['AssigmentTask']['idactivities_tasks']), null, __('Are you sure you want to delete # %s?', $assigmentTask['AssigmentTask']['idactivities_tasks'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assigment Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assigment Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
