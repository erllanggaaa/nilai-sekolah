<?php 
    session_start();
    require_once('config/db.php');
?>
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Sistem Informasi Nilai Kumon Buaran</title>
    <meta name="description" content="">
    <meta name="author" content="Dictatorkid">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
        <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
    <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- Font Awesome -->
    <link href="assets/font/css/font-awesome.min.css" rel="stylesheet">

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min2.js"></script>
<style>.carousel-inner > .item > img,.carousel-inner > .item > a > img { height: 545; width: 860px; margin: auto; padding-top: 25px;}
.carousel-inner { background-image: url("assets/images/bg.png"); }
</style>

</head>

<body>
    <header class="header">

        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="#" class="navbar-brand scroll-top logo"><img src="assets/images/logo2.jpg" alt="" style="margin-top:-10px; width: 70px; height: 50px"> <b>Sistem Rekapitulasi Nilai</b></a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#home" class="scroll-link">Home</a></li>
                        <li><a href="#hotnews" class="scroll-link">Hot News</a></li>
                        <?php 
                            if (isset($_SESSION['username'])) {
                        ?>
                        <li><a href="dashboard/" class="scroll-link">Dashboard</a></li>
                        <li><a href="logout.php" class="scroll-link">Logout</a></li>
                        <?php
                            }else{
                        ?>
                        <li><a href="#profile" class="scroll-link">Login</a></li>
                        <?php
                            }
                        ?>                        
                    </ul>
                </div>                
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>        
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
            <div id="WJSlider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#WJSlider" data-slide-to="0" class="active"></li>
      <li data-target="#WJSlider" data-slide-to="1"></li>
      <li data-target="#WJSlider" data-slide-to="2"></li>
      <li data-target="#WJSlider" data-slide-to="3"></li>
      <li data-target="#WJSlider" data-slide-to="4"></li>
      <li data-target="#WJSlider" data-slide-to="5"></li>
      <li data-target="#WJSlider" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="assets/images/logokumon.jpg" alt="slide1" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="assets/images/1.jpeg" alt="slide2" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>
  
      <div class="item">
        <img src="assets/images/2.jpg" alt="slide3" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="assets/images/3.jpg" alt="slide4" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="assets/images/4.jpg" alt="slide5" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="assets/images/5.jpg" alt="slide6" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="assets/images/6.jpg" alt="slide7" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>
 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#WJSlider" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Kembali</span>
    </a>
    <a class="right carousel-control" href="#WJSlider" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Lanjut</span>
    </a>
  </div>
</div>

    </section>

    <section id="hotnews" class="page-section darkBg pDark pdingBtm30">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2><i class="fa fa-fire color"></i> Hot News</h2><center><hr style="width:15%;"></center>
            </div>
            <?php
                $no         =   1; 
                $artikel    =   mysql_query("SELECT *, kategori.kategori_nama FROM artikel
                                            INNER JOIN kategori ON artikel.kategori_id=kategori.kategori_id
                                            ORDER BY artikel_tgl DESC");
                while ($data=mysql_fetch_array($artikel)) {
            ?>
                <div class="col-md-6" style="color:#ffffff;">
                    <h4># <?php echo $no; ?></h4><hr/>  
                    <h4><?php echo $data['artikel_judul']; ?></h4>
                    <p style="color:#BBBBBB;"><?php echo substr($data['artikel_isi'],0,120); ?>...</p>
                    <div class="action-buttons">
                        <a href="post.php?id=<?php echo "$data[artikel_id]"; ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="pull-right"><?php echo $data['kategori_nama']. " | " .$data['artikel_tgl']; ?></div>
                    <hr/>

                </div>
            <?php
                $no++;
                }                  
            ?>
        </div>
        <!--/.container-->
    </section>
        <!--/.container-->
    </section>
    <section id="profile" class="page-section" style="background:#222222;">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2><i class="fa fa-user color"></i> About Me</h2><center><hr style="width:15%;"></center>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>        
                        <label style="padding-right:70px;">Name</label>   : Endang Herminy K<br>
                        <label style="padding-right:70px;">E-Mail</label> : endangherminy@gmail.com<br>
                        <label style="padding-right:70px;">Phone</label>  : 0811882931 <br>
                    </p>
                </div>
                <?php 
                    if (!isset($_SESSION['access'])) {
                ?>
                <div class="col-md-6">
                    <form role="form" action="core/login_proses.php" method="post">
                        <div class="form-group">
                            <h4 style="color:#999999;">Username :</h4>
                            <input type="text" class="form-control" placeholder="Enter username" name="username" required>
                        </div>
                        <div class="form-group">
                            <h4 style="color:#999999;">Password :</h4>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block" name="signin">Login</button>
                    </form>
                </div>
                <?php
                    }
                ?>                
            </div>

        </div>
        <!--/.container-->
    </section>
    <footer>
        <div class="container">
            <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
    </footer>
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright &copy 2020. All Rights Reserved        
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <script src="assets/js/modernizr-latest.js"></script>
    <script src="assets/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="assets/js/jquery.nav.js" type="text/javascript"></script>
    <script src="assets/js/jquery.cslider.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
    <script src="assets/js/owl-carousel/owl.carousel.js"></script>


</body>
</html>
