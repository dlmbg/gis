

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  </head>

   <body>
    <a class="sr-only" href="#content">Skip navigation</a>

    <!-- Docs master nav -->
    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo Yii::app()->baseUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
      </div>
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=""></i> Wilayah <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_kabupaten"><i class="icon-fire"></i> Kabupaten</a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_kecamatan"><i class="icon-asterisk"></i> Kecamatan</a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_kelurahan"><i class="icon-leaf"></i> Kelurahan</a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_kampung_adat"><i class="icon-tasks"></i> Kampung Adat</a></li>
                  </ul>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_peta"><i class="icon-th-list icon-white"></i> Peta</a>
                </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tags icon-white"></i> Adat Istiadat <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_rumah_adat"><i class="icon-th-large"></i> Rumah Adat</a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_upacara_adat"><i class="icon-th"></i> Upacara Adat</a></li>
                  </ul>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_benda_cagar_budaya"><i class="icon-th-list icon-picture icon-white"></i> Benda Cagar Budaya</a>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_galeri"><i class="icon-th-list icon-picture icon-white"></i> Galeri</a>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_berita"><i class="icon-th-list icon-list-alt icon-white"></i> Berita</a>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_buku_tamu"><i class="icon-th-list icon-inbox icon-white"></i> Buku Tamu</a>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_contact"><i class="icon-th-list icon-folder-close icon-white"></i> Contact</a>
                </li>
          <li class="dropdown">
            <?php

                echo '<a href="'.Yii::app()->baseUrl.'/site/logout"><i class="icon-th-list icon-folder-close icon-white"></i> Log Out</a>';
            
            ?>
                </li>
              </ul>
      </nav>
    </div>
  </header>

    <div class="bs-header" id="content">
      <div class="container">
        <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
        <p>An overview of Bootstrap, how to download and use, basic templates and examples, and more.</p>
      </div>
    </div>

    <!-- Callout for the old docs link -->
    <div class="bs-old-docs">
      <div class="container">
          Selamat datang di website <b>Sistem Informasi Geografis Kampung Adat Kabupaten Flores Timur</b>
      </div>
    </div>



    <div class="container bs-docs-container">
      <div class="row">

        <div class="col-md-9" role="main">
          <div class="bs-docs-section">
              <?php echo $content; ?>
          </div>
        </div>

        <div class="col-md-3" role="main">
          <div class="bs-docs-section">
            <h1>Menu</h1>
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                  'title'=>'Operations',
                ));
                $this->widget('zii.widgets.CMenu', array(
                  'items'=>$this->menu,
                  'htmlOptions'=>array('class'=>'operations'),
                ));
                $this->endWidget();
              ?>
          </div>
        </div>
      </div>
    </div>

    <footer class="bs-footer" role="contentinfo">
      <div class="container">

        <p><?php echo CHtml::encode(Yii::app()->name); ?></p>
      </div>
    </footer>
    

  </body>
</html>
