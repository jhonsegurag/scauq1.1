<div class="activities form">
<?php echo $this->Form->create('Activity'); ?>
	<fieldset>
		<legend><?php echo __('Add Activity'); ?></legend>
	<?php
		$meses = array( '01'=>'Enero','02'=>'Febrero' ,'03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre'); 
		
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('dirigido');
		echo $this->Form->input('fechaInicio',array('label' => 'Fecha de Inicio', 'dateFormat' => 'MDY', 'monthNames' => $meses));
		echo $this->Form->input('fechaFin',array('label' => 'Fecha de Finalizacion', 'dateFormat' => 'MDY', 'monthNames' => $meses));
		echo $this->Form->input('afecta');
		echo $this->Form->input('fuentesInformacion');
		echo $this->Form->input('proceso');
		echo $this->Form->input('idEstadoActividad',array('label'=>'Estado Actividad','class'=>'input select','type'=>'select','options'=>$stateActivities,'empty'=>false));
		echo $this->Form->input('idArchivoEntregableActividad',array('label'=>'Archivo Entregable','class'=>'','type'=>'select','options'=>$fileActivities,'empty'=>false));
	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
