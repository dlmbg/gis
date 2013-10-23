<?php

/**
 * This is the model class for table "dlmbg_peta".
 *
 * The followings are the available columns in table 'dlmbg_peta':
 * @property integer $id_peta
 * @property integer $id_kampung_adat
 * @property string $lokasi
 * @property string $keterangan
 * @property string $lat
 * @property string $lang
 */
class PetaModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PetaModel the static model class
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
		return 'dlmbg_peta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kampung_adat, lokasi, keterangan, lat, lang', 'required'),
			array('id_kampung_adat', 'numerical', 'integerOnly'=>true),
			array('lokasi, lat, lang', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_peta, id_kampung_adat, lokasi, keterangan, lat, lang', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'KampungAdat'=>array(self::BELONGS_TO,'KampungAdatModel','id_kampung_adat'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_peta' => 'Id Peta',
			'id_kampung_adat' => 'Id Kampung Adat',
			'lokasi' => 'Lokasi',
			'keterangan' => 'Keterangan',
			'lat' => 'Lat',
			'lang' => 'Lang',
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

		$criteria->compare('id_peta',$this->id_peta);
		$criteria->compare('id_kampung_adat',$this->id_kampung_adat);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lang',$this->lang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}