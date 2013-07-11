<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--<h3>Bienvenidos a  <i><?php echo CHtml::encode(Yii::app()->name); ?> tu Web Tutorial de PostgreSQL.</i></h3>-->

<article class = "galeria">
<?php $this->widget('bootstrap.widgets.TbCarousel', array(
  'items'=>array(
      array(
		'image'=>'./images/condor-santo-cristo-merida-galeria.png',
		'label'=>'Cóndor Web Tutorial de PostgreSQL.',
		'caption'=>'Foto: Parque Sierra junto a un Cóndor.' . 
			   ' Simbolo de este Proyecto Socio-Tecnológico. '),
     /* array(
		'image'=>'http://placehold.it/830x400&text=Second+thumbnail',
		'label'=>'Second Thumbnail label',
		'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
			'Donec id elit non mi porta gravida at eget metus. ' .
			'Nullam id dolor id nibh ultricies vehicula ut id elit.'),
      array(
		'image'=>'http://placehold.it/830x400&text=Third+thumbnail',
		'label'=>'Third Thumbnail label',
		'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
			'Donec id elit non mi porta gravida at eget metus. ' .
			'Nullam id dolor id nibh ultricies vehicula ut id elit.'),*/
  ),
));?>
</article>




	<article class="Reseña">
		<p>Sitio Web desarrollado como <strong>Proyecto Socio-Tecnológico</strong> por estudiantes del <strong>Colegio Universitario de Caracas</strong>, del trayecto 3 del turno de la noche.</p>
	</article>
