<?php
App::import('Vendor', 'jpgraph-lib/src/jpgraph');
App::import('Vendor', 'jpgraph-lib/src/jpgraph_bar');

class Grafica{
	public function generarGrafica(){
$data1y=array(5,1,2,6);
$data2y=array(1,3,0,2);
$data3y=array(3,7,2,8);


// Create the graph. These two calls are always required
$graph = new Graph(550,400,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,5,10,15,20,25,30), array(15,45,75,105,135));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($data1y);
$b2plot = new BarPlot($data2y);
$b3plot = new BarPlot($data3y);

// Create the grouped bar plot
//$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot));
$gbbplot = new AccBarPlot(array($b1plot,$b2plot,$b3plot));

$gbplot = new GroupBarPlot(array($gbbplot));

// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");
$b1plot->SetLegend("Abierto");

$b2plot->SetColor("white");
$b2plot->SetFillColor("#11cccc");
$b2plot->SetLegend("Reabierto");

$b3plot->SetColor("white");
$b3plot->SetFillColor("#1111cc");
$b3plot->SetLegend("Cerrado");

$graph->title->Set("Porcentaje de trabajo");
//Marco para la leyendas de los datos 
$graph->legend->SetFrameWeight(8);
//$graph->legend->SetColumns(4);

// Display the graph
$graph->Stroke();

	}
}
?>