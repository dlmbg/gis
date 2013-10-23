<?php

/**
 * This is the model class for table "dlmbg_kabupaten".
 *
 * The followings are the available columns in table 'dlmbg_kabupaten':
 * @property integer $id_kabupaten
 * @property string $kabupaten
 */
class KabupatenModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KabupatenModel the static model class
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
		return 'dlmbg_kabupaten';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kabupaten', 'required'),
			array('kabupaten', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_kabupaten, kabupaten', 'safe', 'on'=>'search'),
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
			'id_kabupaten' => 'Id Kabupaten',
			'kabupaten' => 'Kabupaten',
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

		$criteria->compare('id_kabupaten',$this->id_kabupaten);
		$criteria->compare('kabupaten',$this->kabupaten,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}