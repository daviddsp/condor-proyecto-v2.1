<?php

/**
 * This is the model class for table "condor.freferencias".
 *
 * The followings are the available columns in table 'condor.freferencias':
 * @property integer $id_freferencias
 * @property string $nb_freferencias
 * @property string $fr_freferencias
 * @property integer $id_leccion
 */
class Freferencias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Freferencias the static model class
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
		return 'condor.freferencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_freferencias, fr_freferencias, id_leccion', 'required'),
			array('id_leccion', 'numerical', 'integerOnly'=>true),
			array('nb_freferencias', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_freferencias, nb_freferencias, fr_freferencias, id_leccion', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_freferencias' => 'Id Freferencias',
			'nb_freferencias' => 'Nb Freferencias',
			'fr_freferencias' => 'Fr Freferencias',
			'id_leccion' => 'Id Leccion',
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

		$criteria->compare('id_freferencias',$this->id_freferencias);
		$criteria->compare('nb_freferencias',$this->nb_freferencias,true);
		$criteria->compare('fr_freferencias',$this->fr_freferencias,true);
		$criteria->compare('id_leccion',$this->id_leccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}