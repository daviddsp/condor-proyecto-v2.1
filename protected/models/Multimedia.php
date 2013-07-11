<?php

/**
 * This is the model class for table "multimedia".
 *
 * The followings are the available columns in table 'multimedia':
 * @property integer $id_multimedia
 * @property string $url_multimedia
 *
 * The followings are the available model relations:
 * @property Contenidos[] $contenidoses
 */
class Multimedia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Multimedia the static model class
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
		return 'multimedia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url_multimedia', 'required'),
			array('url_multimedia', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_multimedia, url_multimedia', 'safe', 'on'=>'search'),
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
			'contenidoses' => array(self::HAS_MANY, 'Contenidos', 'id_multimedia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_multimedia' => 'Id Multimedia',
			'url_multimedia' => 'Url Multimedia',
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

		$criteria->compare('id_multimedia',$this->id_multimedia);
		$criteria->compare('url_multimedia',$this->url_multimedia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}