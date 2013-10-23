<?php

/**
 * This is the model class for table "dlmbg_benda_cagar_budaya".
 *
 * The followings are the available columns in table 'dlmbg_benda_cagar_budaya':
 * @property integer $id_benda_cagar_budaya
 * @property integer $id_kampung_adat
 * @property string $nama_benda_cagar_budaya
 * @property string $tempat
 * @property string $keterangan
 */
class BendaCagarBudayaModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BendaCagarBudayaModel the static model class
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
		return 'dlmbg_benda_cagar_budaya';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kampung_adat, nama_benda_cagar_budaya, tempat, keterangan', 'required'),
			array('id_kampung_adat', 'numerical', 'integerOnly'=>true),
			array('nama_benda_cagar_budaya, tempat', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_benda_cagar_budaya, id_kampung_adat, nama_benda_cagar_budaya, tempat, keterangan', 'safe', 'on'=>'search'),
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
			'id_benda_cagar_budaya' => 'Id Benda Cagar Budaya',
			'id_kampung_adat' => 'Id Kampung Adat',
			'nama_benda_cagar_budaya' => 'Nama Benda Cagar Budaya',
			'tempat' => 'Tempat',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('id_benda_cagar_budaya',$this->id_benda_cagar_budaya);
		$criteria->compare('id_kampung_adat',$this->id_kampung_adat);
		$criteria->compare('nama_benda_cagar_budaya',$this->nama_benda_cagar_budaya,true);
		$criteria->compare('tempat',$this->tempat,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	
	public function kampung($id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = "id_kampung_adat = '".$id."'";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function kelurahan($id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$param = "0";
		$criteria_k=new CDbCriteria();
		$criteria_k->condition = "id_kelurahan = '".$id."'";
		$dt_kel = KampungAdatModel::model()->findAll($criteria_k);
		foreach($dt_kel as $d)
		{
			$param = $param.",".$d->id_kampung_adat;
		}

		$criteria=new CDbCriteria;
		$criteria->condition = "id_kampung_adat in (".$param.")";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function kecamatan($id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$param1 = "0";
		$criteria_k1=new CDbCriteria();
		$criteria_k1->condition = "id_kecamatan = '".$id."'";
		$dt_kec = KelurahanModel::model()->findAll($criteria_k1);
		foreach($dt_kec as $d)
		{
			$param1 = $param1.",".$d->id_kelurahan;
		}

		$param = "0";
		$criteria_k=new CDbCriteria();
		$criteria_k->condition = "id_kelurahan in (".$param1.")";
		$dt_kel = KampungAdatModel::model()->findAll($criteria_k);
		foreach($dt_kel as $d)
		{
			$param = $param.",".$d->id_kampung_adat;
		}

		$criteria=new CDbCriteria;
		$criteria->condition = "id_kampung_adat in (".$param.")";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function kabupaten($id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$param2 = "0";
		$criteria_k2=new CDbCriteria();
		$criteria_k2->condition = "id_kabupaten = '".$id."'";
		$dt_kab = KecamatanModel::model()->findAll($criteria_k2);
		foreach($dt_kab as $d)
		{
			$param2 = $param2.",".$d->id_kecamatan;
		}

		$param1 = "0";
		$criteria_k1=new CDbCriteria();
		$criteria_k1->condition = "id_kecamatan in (".$param2.")";
		$dt_kec = KelurahanModel::model()->findAll($criteria_k1);
		foreach($dt_kec as $d)
		{
			$param1 = $param1.",".$d->id_kelurahan;
		}

		$param = "0";
		$criteria_k=new CDbCriteria();
		$criteria_k->condition = "id_kelurahan in (".$param1.")";
		$dt_kel = KampungAdatModel::model()->findAll($criteria_k);
		foreach($dt_kel as $d)
		{
			$param = $param.",".$d->id_kampung_adat;
		}

		$criteria=new CDbCriteria;
		$criteria->condition = "id_kampung_adat in (".$param.")";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}