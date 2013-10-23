<?php

class BeritaWidget extends CWidget {

    public function run() {

		$criteria = new CDbCriteria();
		$criteria->order = 'id_berita DESC';
		$criteria->limit = 5;
        $dt = BeritaModel::model()->findAll($criteria);

        $this->render('berita', array(
            'dt'=>$dt   
        ));
    }
}