<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
   
    <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    
    <title>Portfolio</title>
  </head>
  <body>
        <!-- NAVBAR -->
        <section class="navbar" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <img class="logo ml-5" src="<?php echo base_url();?>assets/images/logo_web.png" alt="logo">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="#about">About</a>
                        <a class="nav-link" href="#service">Service</a>
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                        <a class="nav-link" href="#contact">Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <!-- AKHIR NAVBAR -->

    <!-- CONTENT -->

    <!-- PORTFOLIO -->
    <section class="section-tampil portfolio" id="portfolio">
    <div class="bg-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center mt-5 pt-4"><font color = "#FF6666" size="5px" > <strong>Portfolio</strong></font></p>
                    <h1 class="text-center text-white display-4 pb-4">Creative Works </h1>
                </div>
            </div>
        
            <div class="row justify-content-center">
                <div class="col-sm-5 text-center text-black card-body box-portfolio my-4 mx-3">
                    <figure class="figure">    
                        <h4 class="text-black font-weight-bold">Animation 2D</h4>
                        <h4 class="text-black font-weight-bold">Industrial Revolution Waves</h4>
                        <img class="figure-img img-fluid rounded img-portfolio mx-2" src="<?php echo base_url()?>assets/images/industri.jpg" alt="industri">
                        <a href="https://www.youtube.com/watch?v=h3Z0WRlHzjw&t=6s&ab_channel=MuhamadFaisal">
                            <button class="btn-custom2 btn-sm mt-3 px-3 py-2" role="button">Watch Now</button>
                        </a>
                    </figure>
                </div>

                <div class="col-sm-5 text-center text-black card-body box-portfolio my-4 mx-3">
                    <figure class="figure">    
                        <h4 class="text-black font-weight-bold">Motion Graphic</h4>
                        <h4 class="text-black font-weight-bold">Muslim Sejati Pemersatu</h4>
                        <img class="figure-img img-fluid rounded img-portfolio mx-2" src="<?php echo base_url()?>assets/images/muslim.jpg" alt="muslim">
                        <a href="https://www.youtube.com/watch?v=wiHcvl0nG2k&ab_channel=MuhamadFaisal">
                            <button class="btn-custom2 btn-sm mt-3 px-3 py-2" type="button">Watch Now</button>
                        </a>
                    </figure>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-sm-5 text-center text-black card-body box-portfolio my-4 mx-3">
                    <figure class="figure">    
                        <h4 class="text-black font-weight-bold">Ui/Ux Design</h4>
                        <h4 class="text-black font-weight-bold">Web Barita</h4>
                        <img class="figure-img img-fluid rounded img-portfolio mx-2" src="<?php echo base_url()?>assets/images/web-barita.png" alt="web-barita">
                        <a href="https://www.youtube.com/watch?v=rt5IzQ6Oea8&ab_channel=MuhamadFaisal">
                            <button class="btn-custom2 btn-sm mt-3 px-3 py-2" type="button">Watch Now</button>
                        </a>
                    </figure>
                </div>

                <div class="col-sm-5 text-center text-black card-body box-portfolio my-4 mx-3">
                    <figure class="figure">    
                        <h4 class="text-black font-weight-bold">Ui/Ux Design</h4>
                        <h4 class="text-black font-weight-bold">App Barita</h4>
                        <img class="figure-img img-fluid rounded img-portfolio mx-2" src="<?php echo base_url()?>assets/images/app-barita.png" alt="app-barita">
                        <a href="https://www.youtube.com/watch?v=yEhcAyNrkvI&t=18s&ab_channel=MuhamadFaisal">
                            <button class="btn-custom2 btn-sm mt-3 px-3 py-2" type="button">Watch Now</button>
                        </a>
                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <a href="<?php echo base_url() .'index.php/C_home/V_portfolio'; ?>">
                        <button class="btn-custom1 btn-lg mt-3" type="button">Show All</button>
                    </a>
                </div>
            </div>

            <p class="text-center text-white my-4 mx-5 px-5">All the creative work listed is of course made using personal abilities and professional software, the following are personal abilities and the software that I use.</p>

            <div class="row justify-content-center">
                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Adobe XD</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Adobe Illustrator</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Adobe Photoshop</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Adobe Premier Pro</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Adobe After Effect</button>
                </div>                
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">MarvelApp</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Audacity</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Microsoft Office</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Mysql</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Front-end</button>
                </div>                
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">CodeIgniter</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">HTML</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">CSS</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Bootstrap</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">JavaScript</button>
                </div>                
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Figma</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Wordpress</button>
                </div>

                <div class="col-sm-2 text-center">
                    <button class="btn-custom3 btn-sm" href="#" type="button">Stream Labs OBS</button>
                </div>                
            </div>

        </div>
    </div>
    </section>
    <!-- AKHIR PORTFOLIO -->
    
    <!-- CONTACT -->
    <section class="section-tampil contact" id="contact">
        <div class="bg-contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-center mt-5 pt-4"><font color = "#FF6666" size="5px" > <strong>Contact</strong></font></p>
                        <h1 class="text-center text-white display-4 pb-4">Call Me Now </h1>
                    </div>
                </div>

                <div class="row justify-content-center mt-2">
                    <div class="col-sm-3 text-center my-1">
                        <img class="icon-contact" src="<?php echo base_url()?>assets/images/icon/icon-phone.png" alt="icon-phone">
                        <h6 class="text-white font-weight-bold mt-3">Phone Number</h6>
                        <h6 class="text-white font-weight-bold mt-2">+62-822-1648-4272</h6>
                    </div>
                    
                    <div class="col-sm-3 text-center my-1">
                        <img class="icon-contact" src="<?php echo base_url()?>assets/images/icon/icon-email.png" alt="icon-email">
                        <h6 class="text-white font-weight-bold mt-3">E-mail</h6>
                        <h6 class="text-white font-weight-bold mt-2">Mfaisal5597@gmail.com</h6>
                    </div>

                    <div class="col-sm-3 text-center my-1">
                        <img class="icon-contact" src="<?php echo base_url()?>assets/images/icon/icon-location.png" alt="icon-location">
                        <h6 class="text-white font-weight-bold mt-3">Get Me Here</h6>
                        <h6 class="text-white font-weight-bold mt-2">Cisarua, Bandung</h6>
                    </div>
                    
                </div>    
            </div>
        </div>
    </section>
    <!-- AKHIR CONTACT -->

    <!-- FOOTER -->
    <section class="section-tampil footer" id="footer">
        <div class="bg-footer">
            <div class="container">

            </div>
        </div>
    </section>
    <!-- AKHIR FOOTER -->

    <!-- AKHIR CONTENT -->

    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>