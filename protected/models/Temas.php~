<?php

/**
 * This is the model class for table "temas".
 *
 * The followings are the available columns in table 'temas':
 * @property integer $id_temas
 * @property string $nb_temas
 * @property string $descrip_temas
 *
 * The followings are the available model relations:
 * @property Lecciones[] $lecciones
 */
class Temas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Temas the static model class
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
		return 'temas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_temas, descrip_temas', 'required'),
			array('nb_temas', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_temas, nb_temas, descrip_temas', 'safe', 'on'=>'search'),
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
			'lecciones' => array(self::HAS_MANY, 'Lecciones', 'id_temas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_temas' => 'Identificador del Tema',
			'nb_temas' => 'Nombre del Tema',
			'descrip_temas' => 'Descripción del Tema',
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

		$criteria->compare('id_temas',$this->id_temas);
		$criteria->compare('nb_temas',$this->nb_temas,true);
		$criteria->compare('descrip_temas',$this->descrip_temas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
