<?php
App::uses('Conexion', 'Model');
class ReporteGeneral{
	var $conn;
	var $conexion;
	
	function ReporteGeneral(){
		$this->conexion= new  Conexion();
		$this->conn=$this->conexion->conectarse();
	}
	
	public function reportePdfUsuarios(){
	
		$html="";
		$sql="select 
						(select distinct concat( u.nombre,' ',u.apellido) 
						from users as u join tracking_tasks as t on u.username=t.usernameResponsable)as Responsable, 
							nombreTarea,
							estadoTarea,
							fechaActual,
							count(estadoTarea) as Contador 
				from tracking_tasks group by estadoTarea;";
		$rs=mysqli_query($this->conn,$sql);
		$i=0;
	
		$html=$html.'<div align="center">
			Reporte de usuarios registrados en la Base de Datos.
			<br /><br />
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';
		$html=$html.'<tr bgcolor="#FF0000">
	
																			<td><font color="#FFFFFF">	Responsable		</font></td>
																			<td><font color="#FFFFFF">	Tarea 			</font></td>
																			<td><font color="#FFFFFF">	Estado  			</font></td>
																			<td><font color="#FFFFFF">	Fecha 			</font></td>
																			<td><font color="#FFFFFF">	Contador 			</font></td>
								</tr>';
		while ($row = mysqli_fetch_array($rs)){
			if($i%2==0){
				$html=  $html.'<tr bgcolor="#95B1CE">';
			}else{
				$html=$html.'<tr>';
			}
			$html = $html.'<td>';
			//$html = $html. $row["idTrackingTask"];
			//$html = $html.'</td><td>';
			$html = $html. $row["Responsable"];
			$html = $html.'</td><td>';
			$html = $html. $row["nombreTarea"];
			$html = $html.'</td><td>';
			$html = $html. $row["estadoTarea"];
			$html = $html.'</td><td>';
			$html = $html. $row["fechaActual"];
			$html = $html.'</td><td>';
			$html = $html. $row["Contador"];
			$html = $html.'</td></tr>';
			$i++;
		}
		$html=$html.'</table></div>';
		return ($html);
	}
}
?>