<div class="trackingTasks view">
<h2><?php echo __('Tracking Task'); ?></h2>
	<dl>
		<dt><?php echo __('IdTrackingTask'); ?></dt>
		<dd>
			<?php echo h($trackingTask['TrackingTask']['idTrackingTask']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsernameResponsable'); ?></dt>
		<dd>
			<?php echo h($trackingTask['TrackingTask']['usernameResponsable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaActual'); ?></dt>
		<dd>
			<?php echo h($trackingTask['TrackingTask']['fechaActual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NombreTarea'); ?></dt>
		<dd>
			<?php echo h($trackingTask['TrackingTask']['nombreTarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EstadoTarea'); ?></dt>
		<dd>
			<?php echo h($trackingTask['TrackingTask']['estadoTarea']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tracking Task'), array('action' => 'edit', $trackingTask['TrackingTask']['idTrackingTask'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tracking Task'), array('action' => 'delete', $trackingTask['TrackingTask']['idTrackingTask']), null, __('Are you sure you want to delete # %s?', $trackingTask['TrackingTask']['idTrackingTask'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracking Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracking Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
