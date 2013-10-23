    <div class="slider-bootstrap"><!-- start slider -->
    	<div class="slider-wrapper theme-default">
            <div id="slider-nivo" class="nivoSlider">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s10.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s10.jpg" alt="" title="" />
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s11.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s11.jpg" alt="" title="" />
            </div>
        </div>

    </div> <!-- /slider -->
    
    
    <div class="shout-box">
        <div class="shout-text">
          <h1>Greatest website ever</h1>
          <p>We work very hard to bring you the best website themes.<br> All our themes are responsive and look great on any device.</p>
        </div>
    </div>
        
        <div class="row-fluid">
            
            <div class="span3">
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
            
            <div class="span6">
            
           		<h3><?php echo $this->pageTitle=Yii::app()->name; ?></h3>
<p>
	<strong>Assalamualaikum Wr. Wb. </strong><br />
	<br />
	Selamat datang di Website Dinas Perhubungan, Komunikasi dan Informatika Kota Pekanbaru, Website ini dimaksudkan sebagai sarana publikasi untuk memberikan Informasi dan gambaran Dinas Perhubungan, Komunikasi dan Informatika Kota Pekanbaru dalam melaksanakan pelayanan perhubungan. Melalui keberadaan website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang Kebijakan Pemerintah Kota Pekanbaru didalam pengelolaan sektor transportasi dan telekomunikasi di wilayah Kotamadya Pekanbaru.<br />
	<br />
	Kritik dan saran terhadap kekurangan dan kesalahan yang ada sangat kami harapkan guna penyempurnaan Website ini dimasa datang. Semoga Website ini memberikan manfaat bagi kita semua.<br />
	<br />
	Terima kasih.<br />
	<br />
	<strong>S. SAYUTI</strong><br />
	Kepala Dinas Perhubungan, Komunikasi dan Informatika Kota Pekanbaru</p>
            
            </div>
            
            <div class="span3">
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
                <?php
                    setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
                    if (!isset($_COOKIE["pengunjung"])) {
                      $model=new CounterPengunjung;

                      $model->user_time=strtotime("now");
                      $model->user_ip=$_SERVER['REMOTE_ADDR'];
                      $model->save();
                    }

                      $criteria = new CDbCriteria;
                      $count = CounterPengunjung::model()->count($criteria);
                ?>
                    <li class="konten-kiri-li"><a>Dikunjungi oleh : <b><?php echo $count; ?> user</a></b></li>
                    <li class="konten-kiri-li"><a>OS & Browser : <b><?php echo $_SERVER['HTTP_USER_AGENT'];; ?></a></b></li>
                    <li class="konten-kiri-li"><a>IP address : <b><?php echo $_SERVER['REMOTE_ADDR']; ?></a></b></li>
            </ul>
          </div>
        </div>
            
        </div>
       
      
        
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    
     <script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
			effect: 'boxRandom',
			manualAdvance:false,
			controlNav: false
			});
    });
    </script> <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-nivo2').nivoSlider();
    });
    </script>-->



