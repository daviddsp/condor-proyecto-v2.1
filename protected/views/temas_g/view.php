<?php
$this->breadcrumbs=array(
	'Temas_g'=>array('index'),
	$model->id_temas,
);


?>

<h1><?php echo $model->nb_temas; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_temas',
		'nb_temas',
		'descrip_temas',
	),
)); 

if($count_contenidos == 0){
	$html = 'No tiene lecciones Asociadas';
}else{
	
	/* $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
'title' => 'Lista de Lecciones',
'headerIcon' => 'icon-th-list',
// when displaying a table, if we include bootstra-widget-table class
// the table will be 0-padding to the box
'htmlOptions' => array('class'=>'bootstrap-widget-table'),

));*/

	$html='<table><tr><td colspan="8" style="text-align: center;">Lecciones</td></tr>';
	foreach($contenidos as $fila){				  
		$html.= "<tr class='principal' >
			<td  align='center' style=' border: 1px solid #AAAAAA;padding: 0.2em;'>".$fila['id_lecciones']."</td>
			<td  align='center'  style='border: 1px solid #AAAAAA;padding: 0.2em;'>".$fila['descrip_contenidos']."</td>" .
			"<td  align='center'  style='border: 1px solid #AAAAAA;padding: 0.2em;'>".$fila['id_temas']."</td>" .
					"</tr>";
	} 
	$html.='</table>';

}
echo $html;
$this->endWidget();

?>
