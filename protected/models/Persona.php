<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $identificacion
 * @property string $nacimiento
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Conocimiento[] $conocimientos
 * @property Educacion[] $educacions
 * @property Empleado[] $empleados
 * @property Experiencia[] $experiencias
 * @property Postulacion[] $postulacions
 * @property Usuario[] $usuarios
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, identificacion, nacimiento, email', 'required'),
			array('nombres', 'length', 'max'=>60),
			array('apellidos', 'length', 'max'=>100),
			array('identificacion', 'length', 'max'=>20),
			array('email', 'length', 'max'=>45),
			array('email', 'email','message'=>'Formato de e-mail invalido (micorreo@midominio.com)'),
			 array('email', 'unique','message'=>'Dirección ya registrada.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombres, apellidos, identificacion, nacimiento, email', 'safe', 'on'=>'search'),
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
			'conocimientos' => array(self::HAS_MANY, 'Conocimiento', 'persona_id'),
			'educacions' => array(self::HAS_MANY, 'Educacion', 'persona_id'),
			'empleados' => array(self::HAS_MANY, 'Empleado', 'persona_id'),
			'experiencias' => array(self::HAS_MANY, 'Experiencia', 'persona_id'),
			'postulacions' => array(self::HAS_MANY, 'Postulacion', 'persona_id'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'persona_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'identificacion' => 'Identificacion',
			'nacimiento' => 'Nacimiento',
			'email' => 'Email',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('identificacion',$this->identificacion,true);
		$criteria->compare('nacimiento',$this->nacimiento,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
