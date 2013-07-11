<?php

/**
 * This is the model class for table "fuentes".
 *
 * The followings are the available columns in table 'fuentes':
 * @property integer $id_fuente_referencias
 * @property string $fuente_referencias
 *
 * The followings are the available model relations:
 * @property Contenidos[] $contenidoses
 */
class Fuentes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fuentes the static model class
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
		return 'fuentes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fuente_referencias', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_fuente_referencias, fuente_referencias', 'safe', 'on'=>'search'),
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
			'contenidoses' => array(self::HAS_MANY, 'Contenidos', 'id_fuente_referencias'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fuente_referencias' => 'Id Fuente Referencias',
			'fuente_referencias' => 'Fuente Referencias',
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

		$criteria->compare('id_fuente_referencias',$this->id_fuente_referencias);
		$criteria->compare('fuente_referencias',$this->fuente_referencias,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}