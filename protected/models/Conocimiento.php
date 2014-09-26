<?php

/**
 * This is the model class for table "conocimiento".
 *
 * The followings are the available columns in table 'conocimiento':
 * @property integer $id
 * @property string $nombre
 * @property integer $nivel
 * @property integer $persona_id
 * @property integer $area_id
 *
 * The followings are the available model relations:
 * @property Persona $persona
 * @property Area $area
 */
class Conocimiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conocimiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, nivel, persona_id, area_id', 'required'),
			array('nivel, persona_id, area_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>450),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, nivel, persona_id, area_id', 'safe', 'on'=>'search'),
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
			'area' => array(self::BELONGS_TO, 'Area', 'area_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'nivel' => 'Nivel',
			'persona_id' => 'Persona',
			'area_id' => 'Area',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('nivel',$this->nivel);
		$criteria->compare('persona_id',$this->persona_id);
		$criteria->compare('area_id',$this->area_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conocimiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getNiveles(){
		return array(1=>'Novato', 2=>'Bajo', 3=>'Medio',4=>'Alto',5=>'Muy Alto', 6=>'Experto');
	}
}
