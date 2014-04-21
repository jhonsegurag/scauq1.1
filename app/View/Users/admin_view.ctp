<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('IdUser'); ?></dt>
		<dd>
			<?php echo h($user['User']['idUser']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($user['User']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($user['User']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdUnidadOrganizacional'); ?></dt>
		<dd>
			<?php echo h($user['User']['idUnidadOrganizacional']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdRol'); ?></dt>
		<dd>
			<?php echo h($user['User']['idRol']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['idUser'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['idUser']), null, __('Are you sure you want to delete # %s?', $user['User']['idUser'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
