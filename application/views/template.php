<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pondok Pesantren Annasimiyah</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.css">

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url(); ?>assets/css/custom.css' rel='stylesheet' type='text/css'>

    <!-- Slider
    ================================================== -->
    <link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='assets/text/css'>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      .carousel{
          background: #2f4357;
          margin-top: 0px;
      }
      .carousel .item{
          min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
          max-height: 500px;
      }
      .carousel .item img{
          margin: 0 auto; /* Align slide image horizontally center */
      }
      .bs-example{
        margin: 20px;
      }
      .reseize{
        height: 50px;
      }
    </style>
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="index.html">Spirit8</a> -->
          <!-- <img src="assets/img/logo.png" style="height: 70px"> --><br><h2 style="color:#3498db;">Annasimiyah</h2>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-berita" class="page-scroll">Berita</a></li>
            <li><a href="#tf-team" class="page-scroll">Pengasuh</a></li>
       
            <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
            <li><a href="<?php echo base_url('form'); ?>" class="page-scroll">Pendaftaran</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <!-- <div class="overlay">
            <div class="content">
                <h1>Welcome on <strong><span class="color">RAKERNAS ISMKMI 2017</span></strong></h1>
                <p class="lead">Salah Satu Agenda Nasional <strong>Ikatan Senat Mahasiswa Kesehatan Masyarakat Indonesia</strong> 

                
                    
                </p>
                <a href="http://rakernas-ismkmi.dinus.ac.id/form" class="btn btn-danger btn-lg  btn-huge">Daftar Sekarang</a><br/>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div> -->

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            <!-- Wrapper for carousel items -->
            <div class="container">
              
              <div class="carousel-inner">
                <?php 
                  $ac=1;
                ?>
                <?php foreach ($slider as $key) { ?>
                  <div class="item <?php echo ($ac==1 ? 'active' : ''); ?>">
                      <img class="reseize" src="<?php echo base_url('admin/assets/uploads/post/slider/'.$key->gambar); ?>" alt="First Slide" >
                  </div>
                  <?php $ac=0; ?>
                <?php } ?>
                  <!-- <div class="item active">
                      <img class="reseize" src="<?php echo base_url('assets/img/01.jpg'); ?>" alt="First Slide" height="50">
                  </div>
                  <div class="item">
                      <img src="<?php echo base_url('assets/img/03.jpg'); ?>" alt="Second Slide" height="50">
                  </div>
                  <div class="item">
                      <img src="<?php echo base_url('assets/img/04.jpg'); ?>" alt="Third Slide">
                  </div> -->
              </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>



    <div id="tf-berita">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <br><br>
            <h2>Berita</h2>
            <br><br>
          </div>
          
        </div>

        <div class="row">
          <?php foreach ($berita as $key) { ?>
            
            <div class="col-md-6">
              
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="<?php echo $key->gambar; ?>" alt="..." width="70" height="70">
                  </a>
                </div>
                <div class="media-body">
                  <a href="<?php echo $key->sumber; ?>"><h4 class="media-heading"><?php echo $key->judul; ?></h4></a>
                </div>
              </div><br>
            </div>
          <?php } ?>
          <!-- <div class="col-md-6">

          </div> -->
          
        </div>

        <!-- <div class="row">
          <div class="list-group">
            <div class="col-md-6">
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading1</h4>
                <p class="list-group-item-text">...</p>
              </a>
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading1</h4>
                <p class="list-group-item-text">...</p>
              </a>
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading1</h4>
                <p class="list-group-item-text">...</p>
              </a>
            </div>
            <div class="col-md-6">
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading2</h4>
                <p class="list-group-item-text">...</p>
              </a>
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading2</h4>
                <p class="list-group-item-text">...</p>
              </a>
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading2</h4>
                <p class="list-group-item-text">...</p>
              </a>
            </div>
          </div>
        </div> -->
      </div>

    </div>



    <!-- <div id="tf-kegiatan">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <br><br>
            <h2>Kegiatan Rutin</h2>
            <br>
          </div>
          
        </div>

        <div class="media">
          <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
          <div class="media-right">
            <a href="#">
              <img class="media-object" src="<?php echo base_url('assets/img/01.jpg'); ?>" alt="..." width="70" height="70">
            </a>
          </div>
        </div>
      </div>

    </div> -->



    <!-- About Us Page
    ==========================================-->
    <div id="tf-team">
      <div class="overlay">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('admin/assets/uploads/post/profil_abah/'.$abah->foto); ?>" class="img-responsive img-circle" style="border:50;">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <!-- <h4>Sekilas</h4>
                            <h2>RAKERNAS <strong>ISMKMI 2017</strong></h2>
                            <hr> -->
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro"><?php echo $abah->wejangan; ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>



    

    

    
    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2><strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                       <!--  <div class="clearfix"></div>
                        <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>     -->        
                    </div>

                   <div>
                       <p style="font-size: 211%">Jl. Pusponjolo dalam XI/ 11-13 Kelurahan Bojong Salaman, Kecamatan Semarang Barat, Kota Semarang, Kode Pos 50141</p>
                       <!-- <p><h2>Anisa : <strong>085726980420</strong></h2></p> -->
                   </div>

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>Copyright © 2017 <a href="#">Pondok Pesantren Annasimiyah</a></p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/udinus.smg"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/udinus_smg"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://plus.google.com/101582294656647784536"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://twitter.com/udinus_smg"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.isotope.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>

  </body>
</html>