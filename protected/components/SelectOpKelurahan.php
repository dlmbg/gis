<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpKelurahan extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = KelurahanModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_kelurahan==$this->id_select)
            {
                echo "<option value='".$item->id_kelurahan."' selected>".$item->kelurahan."</option>";
            }
            else
            {
                echo "<option value='".$item->id_kelurahan."'>".$item->kelurahan."</option>";
            }
        }
        parent::init();
    }
}