<div class="activities view">
<h2><?php echo __('Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Idactivities'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['idactivities']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirigido'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['dirigido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaInicio'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['fechaInicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaFin'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['fechaFin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afecta'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['afecta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fuentes Informacion'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['fuentes_informacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proceso'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['proceso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Estado Actividad'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['id_Estado_Actividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Archivo Entregable Actividad'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['id_Archivo_Entregable_Actividad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activity'), array('action' => 'edit', $activity['Activity']['idactivities'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activity'), array('action' => 'delete', $activity['Activity']['idactivities']), null, __('Are you sure you want to delete # %s?', $activity['Activity']['idactivities'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
