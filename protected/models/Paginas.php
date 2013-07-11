<?php

/**
 * This is the model class for table "paginas".
 *
 * The followings are the available columns in table 'paginas':
 * @property integer $id_paginaas
 * @property integer $id_usuario
 * @property integer $id_temas
 * @property integer $id_lecciones
 * @property integer $id_multimedia
 * @property integer $id_contenidos
 * @property integer $id_usuarios_lecciones
 * @property integer $id_ejemplos
 * @property integer $id_ejercicios
 * @property integer $id_fuente_referencias
 *
 * The followings are the available model relations:
 * @property Multimedia $idMultimedia
 * @property Contenidos $idContenidos
 * @property Ejemplos $idEjemplos
 * @property Ejercicios $idEjercicios
 * @property Fuentes $idFuenteReferencias
 * @property Lecciones $idLecciones
 * @property Temas $idTemas
 * @property Usuario $idUsuario
 * @property UsuarioLecciones $idUsuariosLecciones
 */
class Paginas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paginas the static model class
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
		return 'paginas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario, id_temas, id_lecciones, id_multimedia, id_contenidos, id_usuarios_lecciones, id_ejemplos, id_ejercicios, id_fuente_referencias', 'required'),
			array('id_usuario, id_temas, id_lecciones, id_multimedia, id_contenidos, id_usuarios_lecciones, id_ejemplos, id_ejercicios, id_fuente_referencias', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_paginaas, id_usuario, id_temas, id_lecciones, id_multimedia, id_contenidos, id_usuarios_lecciones, id_ejemplos, id_ejercicios, id_fuente_referencias', 'safe', 'on'=>'search'),
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
			'idMultimedia' => array(self::BELONGS_TO, 'Multimedia', 'id_multimedia'),
			'idContenidos' => array(self::BELONGS_TO, 'Contenidos', 'id_contenidos'),
			'idEjemplos' => array(self::BELONGS_TO, 'Ejemplos', 'id_ejemplos'),
			'idEjercicios' => array(self::BELONGS_TO, 'Ejercicios', 'id_ejercicios'),
			'idFuenteReferencias' => array(self::BELONGS_TO, 'Fuentes', 'id_fuente_referencias'),
			'idLecciones' => array(self::BELONGS_TO, 'Lecciones', 'id_lecciones'),
			'idTemas' => array(self::BELONGS_TO, 'Temas', 'id_temas'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
			'idUsuariosLecciones' => array(self::BELONGS_TO, 'UsuarioLecciones', 'id_usuarios_lecciones'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_paginaas' => 'Id Paginaas',
			'id_usuario' => 'Id Usuario',
			'id_temas' => 'Id Temas',
			'id_lecciones' => 'Id Lecciones',
			'id_multimedia' => 'Id Multimedia',
			'id_contenidos' => 'Id Contenidos',
			'id_usuarios_lecciones' => 'Id Usuarios Lecciones',
			'id_ejemplos' => 'Id Ejemplos',
			'id_ejercicios' => 'Id Ejercicios',
			'id_fuente_referencias' => 'Id Fuente Referencias',
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

		$criteria->compare('id_paginaas',$this->id_paginaas);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_temas',$this->id_temas);
		$criteria->compare('id_lecciones',$this->id_lecciones);
		$criteria->compare('id_multimedia',$this->id_multimedia);
		$criteria->compare('id_contenidos',$this->id_contenidos);
		$criteria->compare('id_usuarios_lecciones',$this->id_usuarios_lecciones);
		$criteria->compare('id_ejemplos',$this->id_ejemplos);
		$criteria->compare('id_ejercicios',$this->id_ejercicios);
		$criteria->compare('id_fuente_referencias',$this->id_fuente_referencias);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}