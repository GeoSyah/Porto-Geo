<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Portofolio</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Portofolio</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('<?php echo base_url();?>assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span>Geo Syah Alkautsar</span></div>
                <div class="intro-heading text-uppercase"><span style="font-size: 56px;">Internship Worker</span></div><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#cv">Tell me more</a></div>
        </div>
    </header>
    <section id="portfolio" class="bg-light">
        <div class="col"><img style="background-image:url(<?php echo base_url();?>assets/img/IMG_20170525_141204_937.jpg);display: block;margin-left: auto;margin-right: auto;width: 200px;height: 200px;background-size: contain;text-align: center;"></div>
        <div class="col-lg-12 text-center">
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="cv">
                    <?php 
                        foreach($identitas as $identity)
                        {
                            echo "<h5>Name</h5>".$identity->Nama."<br><br>";
                            echo "<h5>Place and Date of Birth</h5>".$identity->Tempatlahir."<br>";
                            echo $identity->Tanggallahir."<br><br>";
                            echo "<h5>Address</h5>".$identity->Alamat."<br><br>";
                            echo "<h5>Contact</h5>".$identity->Nomortelepon."<br>";
                            echo $identity->Email."<br><br>";
                            echo "<h5>Skill</h5>".$identity->Skill;
                        }
                        ?> 
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.min.js"></script>
</body>
