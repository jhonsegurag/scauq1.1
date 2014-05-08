<?php
App::uses('Conexion', 'Model');
App::import('Vendor', 'jpgraph-lib/src/jpgraph');
App::import('Vendor', 'jpgraph-lib/src/jpgraph_bar');

class ReporteGeneral{
	var $conn;
	var $conexion;
	
	function ReporteGeneral(){
		$this->conexion= new  Conexion();
		$this->conn=$this->conexion->conectarse();
	}
	
	public function generarSumatoriaEstados($indice){
	
		$html="";
		$sql="select  concat( u.nombre,' ',u.apellido)  as Responsables,t.nombreTarea,t.estadoTarea, t.fechaActual,count(t.estadoTarea)as cantidad
							from users as u join tracking_tasks as t on u.username=t.usernameResponsable
				group by t.userNameResponsable,t.estadoTarea;";
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
			$html = $html. $row["Responsables"];
			$html = $html.'</td><td>';
			$html = $html. $row["nombreTarea"];
			$html = $html.'</td><td>';
			$html = $html. $row["estadoTarea"];
			$html = $html.'</td><td>';
			$html = $html. $row["fechaActual"];
			$html = $html.'</td><td>';
			$html = $html. $row["cantidad"];
			$html = $html.'</td></tr>';
			$i++;
		}
		
		$html=$html.'</table></div>';
		$html =$html. '
		<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
		<tr><td style="text-align:center;"><img src="img/reportes/reporte'.$indice.'.png" border="0" height="250" width="350" align="middle" /></td></tr>
		</table>';
		return ($html);
	}
	
	public function generarGraficaSumatoriaEstados($idUser){
		
		$nombresResponsables=array();
		$datosAbierto=array();	
		$datosCerrado=array();
		$datosMasInfo=array();
		$datosReabierto=array();
		
		$sql="select userNameResponsable,estadoTarea, count(estadoTarea)as cantidad 
					from tracking_tasks
					group by userNameResponsable,estadoTarea;";
		$rst=mysqli_query($this->conn,$sql);
		
		while($row=$rst->fetch_assoc()){
			
			if ($row['estadoTarea']=="Abierto") {
				array_push($datosAbierto, $row['cantidad']);
			}
			else if ($row['estadoTarea']=="Cerrado") {
				array_push($datosCerrado, $row['cantidad']);
			}
			else if ($row['estadoTarea']=="Mas Info") {
				array_push($datosMasInfo, $row['cantidad']);
			}
			else if ($row['estadoTarea']=="Reabierto") {
				array_push($datosReabierto, $row['cantidad']);
			}
			
		}
		
		
		$sql="select  distinct concat( u.nombre,' ',u.apellido)  as Responsables
							from users as u join tracking_tasks as t on u.username=t.usernameResponsable;";
		$rs=mysqli_query($this->conn,$sql);
		
		while($row=$rs->fetch_assoc()){
			$nombresResponsables[]=$row['Responsables'];
				
		}
		$nombres=array();
		$longitud=count($nombresResponsables);
			for ($i = 0; $i <= ($longitud+1); $i++) {
					array_push($nombres, $nombresResponsables[$longitud-1]);
   		 				$longitud--;
		}
		$nombresResponsables=$nombres;
	
		$sql="select concat(nombre,' ', apellido) as gestor from users where idUser=".$idUser.";";
		$rsg=mysqli_query($this->conn,$sql);
		$resultado = $rsg->fetch_assoc();
		$nombreGestor=$resultado['gestor'];
		
		$sql3='insert into report_tasks (nombreResponsable,fecha) values ("'.$nombreGestor.'", CURDATE());';
		mysqli_query($this->conn,$sql3);
	
		$sql="select count(idReportTasks)as cant from report_Tasks;";
		$rsc=mysqli_query($this->conn,$sql);
		$resultado = $rsc->fetch_assoc();
		$indice=$resultado['cant'];
		
		// Create the graph. These two calls are always required
		$graph = new Graph(550,400,'auto');
		$graph->SetScale("textlin");
	
		$theme_class=new UniversalTheme;
		$graph->SetTheme($theme_class);
	
		$graph->yaxis->SetTickPositions(array(0,5,10,15,20,25,30), array(15,45,75,105,135));
		$graph->SetBox(false);
	
		$graph->ygrid->SetFill(false);
		$graph->xaxis->SetTickLabels($nombresResponsables);
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);
	
		// Create the bar plots
		$plotAbierto = new BarPlot($datosAbierto);
		$plotCerrado = new BarPlot($datosCerrado);
		$plotMasInfo = new BarPlot($datosMasInfo);
		$plotReabierto = new BarPlot($datosReabierto);
	
		// Create the grouped bar plot
		//$gbbplot = new GroupBarPlot(array($plotAbierto,$plotCerrado,$plotMasInfo,$plotReabierto));
		$gbbplot = new AccBarPlot(array($plotAbierto,$plotCerrado,$plotMasInfo,$plotReabierto));
	
		$gbplot = new GroupBarPlot(array($gbbplot));
	
		// ...and add it to the graPH
		$graph->Add($gbplot);
	
	
		$plotAbierto->SetColor("white");
		$plotAbierto->SetFillColor("#cc1111");
		$plotAbierto->SetLegend("Abierto");
	
		$plotCerrado->SetColor("white");
		$plotCerrado->SetFillColor("#11cccc");
		$plotCerrado->SetLegend("Cerrado");
	
		$plotMasInfo->SetColor("white");
		$plotMasInfo->SetFillColor("#1111cc");
		$plotMasInfo->SetLegend("Mas Info");
	
		$plotReabierto->SetColor("white");
		$plotReabierto->SetFillColor("#1c1c1c");
		$plotReabierto->SetLegend("Reabierto");
		
		$graph->title->Set("Porcentaje de trabajo");
		//Marco para la leyendas de los datos
		$graph->legend->SetFrameWeight(8);
		//$graph->legend->SetColumns(4);
	
		// Display the graph
		//@unlink("img/reportes/imagen.png");
		$graph->Stroke('img/reportes/reporte'.$indice.'.png');
		
		return $indice;
	
	}
	
}
?>