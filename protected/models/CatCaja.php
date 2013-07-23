<?php

/**
 * This is the model class for table "catCaja".
 *
 * The followings are the available columns in table 'catCaja':
 * @property integer $keyC
 * @property string $codCaja
 * @property string $descripcionCaja
 * @property integer $code1
 */
class CatCaja extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatCaja the static model class
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
		return 'catCaja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('keyC, codCaja, descripcionCaja, code1', 'required'),
			array('keyC, code1', 'numerical', 'integerOnly'=>true),
			array('codCaja', 'length', 'max'=>2),
			array('descripcionCaja', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyC, codCaja, descripcionCaja, code1', 'safe', 'on'=>'search'),
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
			'keyC' => 'Key C',
			'codCaja' => 'Cod Caja',
			'descripcionCaja' => 'Descripcion Caja',
			'code1' => 'Code1',
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

		$criteria->compare('keyC',$this->keyC);
		$criteria->compare('codCaja',$this->codCaja,true);
		$criteria->compare('descripcionCaja',$this->descripcionCaja,true);
		$criteria->compare('code1',$this->code1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}