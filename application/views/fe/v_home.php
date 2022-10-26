<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to Article</title>
    <link rel="shorcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'theme/css/open-iconic-bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.theme.default.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/aos.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/ionicons.min.css'?>">    
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/flaticon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url().'theme/css/tampilansidebar.css'?>">


    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <?php  
        // $this->load->view('fe/v_header');
        $this->load->view('fe/v_menu');
    ?>


<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider_old.jpg'?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-2_old.jpg'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-3_old.jpg'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-1.jpg'?>" alt="fourth slide">
                    <div class="carousel-caption d-md-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
               <h2>Primary prevention declaration</h2>
                    <p>
                        Try was established in January 1998 in Jakarta, the capital, as a pioneer of Japanese consulting company in Indonesia. Since its founding, we have been at the forefront of the dynamic Indonesian business scene, and have helped Japanese companies in terms of personnel and general affairs, such as company establishment (license application agency), labor issues, and labor system construction.
                    </p>
            </div>
            <div class="col-md-3">
                <img src="<?php echo base_url().'theme/images/welcome.jpg'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    Fuji Staff provides services with the aim of "primary prevention" in company management in Indonesia. In preventive medicine, primary prevention refers to activities to prevent illness. Treatment after the onset of illness takes time, money and effort. This also applies to company management. In Indonesia, there are many revisions to regulations and their operation, and it is not uncommon for people to violate compliance without realizing it.                       
                </p>
                <p>
                    In this rapidly changing Indonesian market, Fuji Staff has helped and will continue to help clients create an environment where they can concentrate on their company management.
                </p>
            </div>            
        </div>
    </div>
</section>
<!--//END ABOUT -->
<!--============================= OUR COURSES =============================-->

    <section class="ftco-section">
        <div class="container">
		    <div class="row justify-content-center mb-5 pb-2">
		      <div class="col-md-8 text-center heading-section ftco-animate">
		        <h2 class="mb-4">Our Services</h2>
		      </div>
		    </div>
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex">
                    <div class="services-2 noborder-left text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                        <div class="text media-body">
                            <h3>Company Establishment</h3>
                            <p>
                                We support the establishment of representative offices or other Indonesian legal entities by going through complex formal procedures, such as submitting applications and registrations, on behalf of clients. By using our services, you are not required to be repeatedly present in Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="services-2 text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
                        <div class="text media-body">
                            <h3>Personnel and General Affairs Consulting</h3>
                            <p>
                                In actual operation of your company, you might have many questions relating not only to Laws and Regulations but also business practices in Indonesia, or need examples of other companies for your references. Our Personnel and General Affairs Consulting Team provides solutions to such questions within 24 hours.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-money"></span></div>
                        <div class="text media-body">
                            <h3>Administrative Support for Government Procedures</h3>
                            <p>
                                On your behalf, we apply for government licenses and permits required to operate your company and submit obligatory report to the government. We also provide advice to you regarding such administrative requirement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="services-2 text-center noborder-bottom ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-rating"></span></div>
                        <div class="text media-body">
                            <h3>Company Regulations and Collective Labor Agreement Support</h3>
                            <p>
                                We support draw-ups for Company Regulations and Collective Labor Agreement which are the absolute keys in personnel and human resource management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--============================= EVENTS =============================-->



<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Latest Articles</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/1ed0f6d2-83b1-4b96-90a5-c69cdb18de65_169.jpeg'?>" class="img-fluid"  alt="courses-img">
                    </div>
                    <a href="<?php echo site_url('blog/detail/'.$row->title);?>" class="course-box-content">
                        <h3><?php echo $row->title;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('blog');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->

<!--============================= FOOTER =============================-->

        <?php  
            $this->load->view('fe/v_footer');
        ?>

        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>

        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        <script>
            $(document).ready(function() {
              $('#myModal').modal('show');
            });
        </script>

        <script type='text/javascript'>
            $('img').bind('contextmenu', function(e){
                return false;
            });
        </script>
        <script type="text/javascript">
            var navbar = document.querySelector('nav')

            window.onscroll = function() {

              // pageYOffset or scrollY
              if (window.pageYOffset > 0) {
                navbar.classList.add('scrolled')
              } else {
                navbar.classList.remove('scrolled')
              }
            }
        </script>
        <script type="text/javascript">
            var navbar = document.querySelector('nav')
            window.onscroll = function() {

              // pageYOffset or scrollY
              if (window.pageYOffset < 1) {
                navbar.classList.add('scrolled_top')
              } else {
                navbar.classList.remove('scrolled_top')
              }
            }
        </script>        
    </body>
</html>
