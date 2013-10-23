<?php

/**
 * This is the model class for table "dlmbg_kecamatan".
 *
 * The followings are the available columns in table 'dlmbg_kecamatan':
 * @property integer $id_kecamatan
 * @property integer $id_kabupaten
 * @property string $nama_kecamatan
 */
class KecamatanModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KecamatanModel the static model class
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
		return 'dlmbg_kecamatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kabupaten, nama_kecamatan', 'required'),
			array('id_kabupaten', 'numerical', 'integerOnly'=>true),
			array('nama_kecamatan', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_kecamatan, id_kabupaten, nama_kecamatan', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'Kabupaten'=>array(self::BELONGS_TO,'KabupatenModel','id_kabupaten'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kecamatan' => 'Id Kecamatan',
			'id_kabupaten' => 'Id Kabupaten',
			'nama_kecamatan' => 'Nama Kecamatan',
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

		$criteria->compare('id_kecamatan',$this->id_kecamatan);
		$criteria->compare('id_kabupaten',$this->id_kabupaten);
		$criteria->compare('nama_kecamatan',$this->nama_kecamatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}