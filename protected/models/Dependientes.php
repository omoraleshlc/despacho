<?php

/**
 * This is the model class for table "dependientes".
 *
 * The followings are the available columns in table 'dependientes':
 * @property integer $keyD
 * @property integer $keyR
 * @property string $nombre
 * @property string $nombre1
 * @property string $nombre2
 * @property string $apellido1
 * @property integer $apellido2
 * @property integer $apellido3
 * @property string $nombreCompleto
 */
class Dependientes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dependientes the static model class
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
		return 'dependientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('keyR, nombre,  apellido1, apellido2', 'required'),
			array('keyR', 'numerical', 'integerOnly'=>true),
			array('nombre, nombre1, nombre2, apellido1', 'length', 'max'=>50),
			array('nombreCompleto', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nombre, nombre1, nombre2, apellido1, apellido2, apellido3, nombreCompleto', 'safe', 'on'=>'search'),
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
			'nombre' => 'Primer Nombre',
			'nombre1' => 'Segundo Nombre',
			'nombre2' => 'Tercer Nombre',
			'apellido1' => 'Apellido Paterno',
			'apellido2' => 'Apellido Materno',
			'apellido3' => 'Apellido de Soltero(a)',
			'nombreCompleto' => 'Nombre Completo',
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

		//$criteria->compare('keyD',$this->keyD);
		$criteria->compare('keyR',$this->keyR);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('nombre1',$this->nombre1,true);
		$criteria->compare('nombre2',$this->nombre2,true);
		$criteria->compare('apellido1',$this->apellido1,true);
		$criteria->compare('apellido2',$this->apellido2);
		$criteria->compare('apellido3',$this->apellido3);
		$criteria->compare('nombreCompleto',$this->nombreCompleto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}