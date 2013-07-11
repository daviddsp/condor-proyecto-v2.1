<?php

/**
 * This is the model class for table "ejercicios".
 *
 * The followings are the available columns in table 'ejercicios':
 * @property integer $id_ejercicios
 * @property string $nb_ejercicios
 * @property string $des_ejercicios
 * @property string $cont_ejercicios
 *
 * The followings are the available model relations:
 * @property Contenidos[] $contenidoses
 */
class Ejercicios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ejercicios the static model class
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
		return 'ejercicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_ejercicios, cont_ejercicios', 'required'),
			array('nb_ejercicios', 'length', 'max'=>100),
			array('des_ejercicios', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ejercicios, nb_ejercicios, des_ejercicios, cont_ejercicios', 'safe', 'on'=>'search'),
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
			'contenidoses' => array(self::HAS_MANY, 'Contenidos', 'id_ejercicios'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ejercicios' => 'Id Ejercicios',
			'nb_ejercicios' => 'Nb Ejercicios',
			'des_ejercicios' => 'Des Ejercicios',
			'cont_ejercicios' => 'Cont Ejercicios',
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

		$criteria->compare('id_ejercicios',$this->id_ejercicios);
		$criteria->compare('nb_ejercicios',$this->nb_ejercicios,true);
		$criteria->compare('des_ejercicios',$this->des_ejercicios,true);
		$criteria->compare('cont_ejercicios',$this->cont_ejercicios,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}