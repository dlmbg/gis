<?php

/**
 * This is the model class for table "dlmbg_kelurahan".
 *
 * The followings are the available columns in table 'dlmbg_kelurahan':
 * @property integer $id_kelurahan
 * @property integer $id_kecamatan
 * @property string $kelurahan
 */
class KelurahanModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KelurahanModel the static model class
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
		return 'dlmbg_kelurahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kecamatan, kelurahan', 'required'),
			array('id_kecamatan', 'numerical', 'integerOnly'=>true),
			array('kelurahan', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_kelurahan, id_kecamatan, kelurahan', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'Kecamatan'=>array(self::BELONGS_TO,'KecamatanModel','id_kecamatan'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kelurahan' => 'Id Kelurahan',
			'id_kecamatan' => 'Id Kecamatan',
			'kelurahan' => 'Kelurahan',
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

		$criteria->compare('id_kelurahan',$this->id_kelurahan);
		$criteria->compare('id_kecamatan',$this->id_kecamatan);
		$criteria->compare('kelurahan',$this->kelurahan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}