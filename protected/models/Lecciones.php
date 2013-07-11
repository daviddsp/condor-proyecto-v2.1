<?php

/**
 * This is the model class for table "lecciones".
 *
 * The followings are the available columns in table 'lecciones':
 * @property integer $id_lecciones
 * @property integer $id_temas
 * @property string $nb_lecciones
 *
 * The followings are the available model relations:
 * @property Temas $idTemas
 * @property Contenidos[] $contenidoses
 */
class Lecciones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lecciones the static model class
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
		return 'lecciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_temas, nb_lecciones', 'required'),
			array('id_temas', 'numerical', 'integerOnly'=>true),
			array('nb_lecciones', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_lecciones, id_temas, nb_lecciones', 'safe', 'on'=>'search'),
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
			'temas' => array(self::BELONGS_TO, 'Temas', 'id_temas'),
			'contenidoses' => array(self::HAS_MANY, 'Contenidos', 'id_lecciones'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_lecciones' => 'Nº de la Lección',
			'id_temas' => 'Id del Tema',
			'nb_lecciones' => 'Nombre de la Lección',
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

		$criteria->compare('temas.id_temas',$_GET["tema"]);
		$criteria->compare('id_lecciones',$this->id_lecciones);
		$criteria->with =array('temas');
		$criteria->addSearchCondition('temas.nb_temas', $this->id_temas);
		$criteria->compare('nb_lecciones',$this->nb_lecciones,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
