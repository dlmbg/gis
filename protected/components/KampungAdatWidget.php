<?php

class KampungAdatWidget extends CWidget {

    public function run() {

		$criteria = new CDbCriteria();
		$criteria->order = 'id_kampung_adat DESC';
		$criteria->limit = 5;
        $dt = KampungAdatModel::model()->findAll($criteria);

        $this->render('kampung_adat', array(
            'dt'=>$dt   
        ));
    }
}