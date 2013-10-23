<?php

class RumahAdatWidget extends CWidget {

    public function run() {

		$criteria = new CDbCriteria();
		$criteria->order = 'id_rumah_adat DESC';
		$criteria->limit = 5;
        $dt = RumahAdatModel::model()->findAll($criteria);

        $this->render('rumah_adat', array(
            'dt'=>$dt   
        ));
    }
}