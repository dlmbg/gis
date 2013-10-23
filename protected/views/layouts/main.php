

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
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/kabupaten"><i class="icon-fire"></i> Kabupaten</a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/kecamatan"><i class="icon-asterisk"></i> Kecamatan</a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/kelurahan"><i class="icon-leaf"></i> Kelurahan</a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/kampung_adat"><i class="icon-tasks"></i> Kampung Adat</a></li>
                  </ul>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/peta"><i class="icon-th-list icon-white"></i> Peta</a>
                </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tags icon-white"></i> Adat Istiadat <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/rumah_adat"><i class="icon-th-large"></i> Rumah Adat</a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/upacara_adat"><i class="icon-th"></i> Upacara Adat</a></li>
                  </ul>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/benda_cagar_budaya"><i class="icon-th-list icon-picture icon-white"></i> Benda Cagar Budaya</a>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/galeri"><i class="icon-th-list icon-picture icon-white"></i> Galeri</a>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/berita"><i class="icon-th-list icon-list-alt icon-white"></i> Berita</a>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/buku_tamu"><i class="icon-th-list icon-inbox icon-white"></i> Buku Tamu</a>
                </li>
          <li class="dropdown">
            <a href="<?php echo Yii::app()->baseUrl; ?>/site/contact"><i class="icon-th-list icon-folder-close icon-white"></i> Contact</a>
                </li>
          <li class="dropdown">
            <?php
            if (Yii::app()->user->isGuest) 
            {
                echo '<a href="'.Yii::app()->baseUrl.'/site/login"><i class="icon-th-list icon-folder-close icon-white"></i> Log In</a>';
            }
            else
            {
                echo '<a href="'.Yii::app()->baseUrl.'/dashboard"><i class="icon-th-list icon-folder-close icon-white"></i> Dashboard</a>';
            }
            ?>
                </li>
              </ul>
      </nav>
    </div>
  </header>

    <div class="bs-header" id="content">
      <div class="container">
        <?php
        $this->widget('bootstrap.widgets.TbCarousel', array(
  'items'=>array(
      array(
    'image'=>Yii::app()->baseUrl.'/images/1.jpg',
    'label'=>'First Thumbnail label',
    'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
      'Donec id elit non mi porta gravida at eget metus. ' .
      'Nullam id dolor id nibh ultricies vehicula ut id elit.'),
      array(
    'image'=>Yii::app()->baseUrl.'/images/2.jpg',
    'label'=>'Second Thumbnail label',
    'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
      'Donec id elit non mi porta gravida at eget metus. ' .
      'Nullam id dolor id nibh ultricies vehicula ut id elit.'),
      array(
    'image'=>Yii::app()->baseUrl.'/images/3.jpg',
    'label'=>'Third Thumbnail label',
    'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. ' .
      'Donec id elit non mi porta gravida at eget metus. ' .
      'Nullam id dolor id nibh ultricies vehicula ut id elit.'),
  ),
));
?>
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
        <div class="col-md-3">
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
                <li>
                  <a><h4>UPACARA ADAT</h4></a>
                </li>
                <?php $this->widget('UpacaraAdatWidget'); ?>
            </ul>
          </div>
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
                <li>
                  <a><h4>BENDA CAGAR BUDAYA</h4></a>
                </li>
                <?php $this->widget('BendaCagarBudayaWidget'); ?>
            </ul>
          </div>
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
                <li>
                  <a><h4>BERITA</h4></a>
                </li>
                <?php $this->widget('BeritaWidget'); ?>
            </ul>
          </div>
        </div>

        <div class="col-md-6" role="main">
          <div class="bs-docs-section">
              <?php echo $content; ?>
          </div>
        </div>

        <div class="col-md-3">
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
                <li>
                  <a><h4>KAMPUNG ADAT</h4></a>
                </li>
                <?php $this->widget('KampungAdatWidget'); ?>
            </ul>
          </div>
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
                <li>
                  <a><h4>RUMAH ADAT</h4></a>
                </li>
                <?php $this->widget('RumahAdatWidget'); ?>
            </ul>
          </div>
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
                <li>
                  <a><h4>STATISTIK KUNJUNGAN</h4></a>
                </li>
                  <?php Yii::app()->counter->refresh(); ?>
                  online: <?php echo Yii::app()->counter->getOnline(); ?><br />
today: <?php echo Yii::app()->counter->getToday(); ?><br />
yesterday: <?php echo Yii::app()->counter->getYesterday(); ?><br />
total: <?php echo Yii::app()->counter->getTotal(); ?><br />
maximum: <?php echo Yii::app()->counter->getMaximal(); ?><br />
date for maximum: <?php echo date('d.m.Y', Yii::app()->counter->getMaximalTime()); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <footer class="bs-footer" role="contentinfo">
      <div class="container">

        <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
          <li><a href="../2.3.2/">Bootstrap 2.3.2 docs</a></li>
          <li class="muted">&middot;</li>
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twbs/bootstrap/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twbs/bootstrap/releases">Releases</a></li>
        </ul>
      </div>
    </footer>
    

  </body>
</html>
