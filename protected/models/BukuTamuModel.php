<?php

/**
 * This is the model class for table "dlmbg_buku_tamu".
 *
 * The followings are the available columns in table 'dlmbg_buku_tamu':
 * @property integer $id_buku_tamu
 * @property string $nama
 * @property string $asal
 * @property string $tanggal
 * @property string $pesan
 * @property string $email
 * @property integer $stts
 */
class BukuTamuModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BukuTamuModel the static model class
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
		return 'dlmbg_buku_tamu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, asal, pesan, email', 'required'),
			array('stts', 'numerical', 'integerOnly'=>true),
			array('nama, email', 'length', 'max'=>100),
			array('asal', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_buku_tamu, nama, asal, pesan, email, stts', 'safe', 'on'=>'search'),
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
			'id_buku_tamu' => 'Id Buku Tamu',
			'nama' => 'Nama',
			'asal' => 'Asal',
			'tanggal' => 'Tanggal',
			'pesan' => 'Pesan',
			'email' => 'Email',
			'stts' => 'Stts',
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

		$criteria->compare('id_buku_tamu',$this->id_buku_tamu);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('asal',$this->asal,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('pesan',$this->pesan,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('stts',$this->stts);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}