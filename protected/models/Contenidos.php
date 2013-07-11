<?php

/**
 * This is the model class for table "contenidos".
 *
 * The followings are the available columns in table 'contenidos':
 * @property integer $id_contenidos
 * @property integer $id_lecciones
 * @property integer $id_ejemplos
 * @property integer $id_ejercicios
 * @property integer $id_fuente_referencias
 * @property integer $id_multimedia
 * @property string $descrip_contenidos
 *
 * The followings are the available model relations:
 * @property Ejemplos $idEjemplos
 * @property Ejercicios $idEjercicios
 * @property Fuentes $idFuenteReferencias
 * @property Lecciones $idLecciones
 * @property Multimedia $idMultimedia
 */
class Contenidos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contenidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contenidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_lecciones, id_ejemplos, id_ejercicios, id_fuente_referencias, id_multimedia, descrip_contenidos', 'required'),
			array('id_lecciones, id_ejemplos, id_ejercicios, id_fuente_referencias, id_multimedia', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_contenidos, id_lecciones, id_ejemplos, id_ejercicios, id_fuente_referencias, id_multimedia, descrip_contenidos', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idEjemplos' => array(self::BELONGS_TO, 'Ejemplos', 'id_ejemplos'),
			'idEjercicios' => array(self::BELONGS_TO, 'Ejercicios', 'id_ejercicios'),
			'idFuenteReferencias' => array(self::BELONGS_TO, 'Fuentes', 'id_fuente_referencias'),
			'idlecciones' => array(self::BELONGS_TO, 'Lecciones', 'id_lecciones'),
			'idMultimedia' => array(self::BELONGS_TO, 'Multimedia', 'id_multimedia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contenidos' => 'Id Contenidos',
			'id_lecciones' => 'Nombre de la leccion',
			'id_ejemplos' => 'Id Ejemplos',
			'id_ejercicios' => 'Id Ejercicios',
			'id_fuente_referencias' => 'Id Fuente Referencias',
			'id_multimedia' => 'Id Multimedia',
			'descrip_contenidos' => 'Descrip Contenidos',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_contenidos',$this->id_contenidos);
		$criteria->with =array('idlecciones');
		$criteria->addSearchCondition('idlecciones.nb_lecciones', $this->id_lecciones);
		$criteria->compare('id_ejemplos',$this->id_ejemplos);
		$criteria->compare('id_ejercicios',$this->id_ejercicios);
		$criteria->compare('id_fuente_referencias',$this->id_fuente_referencias);
		$criteria->compare('id_multimedia',$this->id_multimedia);
		$criteria->compare('descrip_contenidos',$this->descrip_contenidos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}