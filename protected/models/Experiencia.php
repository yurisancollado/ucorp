<?php

/**
 * This is the model class for table "experiencia".
 *
 * The followings are the available columns in table 'experiencia':
 * @property integer $id
 * @property string $organizacion
 * @property string $inicio
 * @property string $finalizacion
 * @property string $ultimoCargo
 * @property string $descripcion
 * @property integer $persona_id
 *
 * The followings are the available model relations:
 * @property Persona $persona
 */
class Experiencia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'experiencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organizacion, inicio, ultimoCargo, persona_id', 'required'),
			array('persona_id', 'numerical', 'integerOnly'=>true),
			array('organizacion', 'length', 'max'=>450),
			array('ultimoCargo', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>500),
			array('finalizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organizacion, inicio, finalizacion, ultimoCargo, descripcion, persona_id', 'safe', 'on'=>'search'),
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
			'persona' => array(self::BELONGS_TO, 'Persona', 'persona_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'organizacion' => 'Organizacion',
			'inicio' => 'Inicio',
			'finalizacion' => 'Finalizacion',
			'ultimoCargo' => 'Ultimo Cargo',
			'descripcion' => 'Descripcion',
			'persona_id' => 'Persona',
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
		$criteria->compare('organizacion',$this->organizacion,true);
		$criteria->compare('inicio',$this->inicio,true);
		$criteria->compare('finalizacion',$this->finalizacion,true);
		$criteria->compare('ultimoCargo',$this->ultimoCargo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('persona_id',$this->persona_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Experiencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
