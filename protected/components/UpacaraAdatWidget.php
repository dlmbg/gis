<?php

class UpacaraAdatWidget extends CWidget {

    public function run() {

		$criteria = new CDbCriteria();
		$criteria->order = 'id_upacara_adat DESC';
		$criteria->limit = 5;
        $dt = UpacaraAdatModel::model()->findAll($criteria);

        $this->render('upacara_adat', array(
            'dt'=>$dt   
        ));
    }
}