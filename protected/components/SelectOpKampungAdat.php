<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpKampungAdat extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = KampungAdatModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_kampung_adat==$this->id_select)
            {
                echo "<option value='".$item->id_kampung_adat."' selected>".$item->nama_kampung."</option>";
            }
            else
            {
                echo "<option value='".$item->id_kampung_adat."'>".$item->nama_kampung."</option>";
            }
        }
        parent::init();
    }
}