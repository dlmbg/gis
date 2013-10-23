<?php

/**
 * This is the model class for table "dlmbg_berita".
 *
 * The followings are the available columns in table 'dlmbg_berita':
 * @property integer $id_berita
 * @property string $tanggal
 * @property string $judul
 * @property string $isi
 */
class BeritaModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BeritaModel the static model class
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
		return 'dlmbg_berita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal, judul, isi', 'required'),
			array('tanggal', 'length', 'max'=>50),
			array('judul', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_berita, tanggal, judul, isi', 'safe', 'on'=>'search'),
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
			'id_berita' => 'Id Berita',
			'tanggal' => 'Tanggal',
			'judul' => 'Judul',
			'isi' => 'Isi',
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

		$criteria->compare('id_berita',$this->id_berita);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('isi',$this->isi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}