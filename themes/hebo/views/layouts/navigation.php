<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
     
      <!-- NOTE: Do not remove this. It is the navigation dropdown for mobile devices. It only shows on small screens-->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a><!--/.btn-navbar -->

      <div class="nav-collapse collapse">
        <ul class="nav">
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
      </div><!--/.nav-collapse -->
    </div><!--/ .container -->
  </div><!--/.nav-inner -->
</div><!--/.navbar-inverse -->