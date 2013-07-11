<?php
$this->breadcrumbs=array(
	'Lecciones'=>array('index'),
	$model->id_lecciones,
);

/*$this->menu=array(
	array('label'=>'List Lecciones','url'=>array('index')),
	array('label'=>'Create Lecciones','url'=>array('create')),
	array('label'=>'Update Lecciones','url'=>array('update','id'=>$model->id_lecciones)),
	array('label'=>'Delete Lecciones','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lecciones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lecciones','url'=>array('admin')),
);*/
?>



<?php /*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_lecciones',
		'id_temas',
		'nb_lecciones',
	),
)); */

$html_empresa='<div class="bloque-contenedor">
<a name="1336495304"></a>

<div class="contenedor-interno">';

$html_empresa.= '<b><div class="titulo-bloque">Lección Nº </b>'
.$model->id_lecciones.' </div><center> <div class="titulo-bloque2">'.$model->nb_lecciones.'</div></center>';

$html_empresa.= '</div></div>';

echo $html_empresa;

$sql = "select * from contenidos where id_lecciones=".$model->id_lecciones;
$contable_fiscal = Yii::app() -> db -> createCommand($sql) ->  query();

$html_contable_fiscal='<div class="bloque-contenedor">
                <a name="1336495304"></a>
                <div class="titulo-bloque">Contenido</div>
                <div class="contenedor-interno">';
$i=0;
 foreach($contable_fiscal as $fila)  
    {  		//$html_establecimiento.= '<h3><b>Sede N°'.++$i.'</b></h3>';
if($i > 0){ $html_contable_fiscal.='<br><br>';}
		$html_contable_fiscal.= $fila['descrip_contenidos'].'<br>';

$i++ ;
}
$html_contable_fiscal.= '</div></div>';
echo $html_contable_fiscal;
?>
