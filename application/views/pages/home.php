
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="keywords" content="questions, teachers, education, find-teacher-online">
    <meta name="description" content="YeneYeneta.com is a place for students and teachers ">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>favicon.ico">
    <title>YeneYeneta.com</title>
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/form-validation.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-light text-dark navbar-light fixed-top nav-home">
    <div class="container">
      <a href="index.html" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/img/yenetanew.png"></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home-section" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#explore-head-section" class="nav-link">Explore</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME SECTION -->
  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner">
        <div class="container">
          <?php
          if($this->session->flashdata('login_failed')): ?>
          <?php
          echo '<p class="alert alert-danger alert-dismissible"><i class="fa fa-times-circle"></i> Failure: '.$this->session->flashdata('login_failed'). '<button type="button" class="close" data-dismiss="alert">x</button></P>' ; ?>
          <?php
          endif; ?>
          <!-- log out -->
          <?php
          if($this->session->flashdata('user_loggedout')): ?>
          <?php
          echo '<p class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> Success: '.$this->session->flashdata('user_loggedout'). '<button type="button" class="close" data-dismiss="alert">x</button></P>' ; ?>
          <?php
          endif; ?>
          <!-- registersed -->
          <?php
          if($this->session->flashdata('user_registered')): ?>
          <?php
          echo '<p class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> success: '.$this->session->flashdata('user_registered'). '<button type="button" class="close" data-dismiss="alert">x</button></P>' ; ?>
          <?php
          endif; ?>
          <div class="row">
            <div class="col-lg-8 d-none d-lg-block">
              <h1 class="display-4">Ask, <strong>Answer</strong> and Help Each other.</h1>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                  If you are a teacher, student or if you want to teach your self you are at the right place. this is a place where peoples ask and answer questions.
                </div>
              </div>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                  But it is not only questions that you found here , if you are looking for a teacher to hire or if you are a teacher to be hired you
                  probably be at the right place.
                </div>
              </div>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-info-circle"></i>
                </div>
                <div class="p-4 align-self-end">
                  YeneYeneta.com is lunched for Yehemdar Family School only , but soon it will be free and open for every one!
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card bg-yeneta text-center card-form">
                <div class="card-body">
                  <h3 class="mb-3">Sign Up Today</h3>

               <!--  sign up server validation errors  -->

                    <?php
                    echo validation_errors() ?>

                <form action="<?php echo base_url() ?>users/register" method="post" autocomplete="off" class="needs-validation" novalidate>
                  <div class="form-group">
                    <input type="text" autocomplete="off" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Username" required>
                    <div class="invalid-feedback">
                      Valid username is required.
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" autocomplete="off" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email" required>
                    <div class="invalid-feedback">
                      Please enter a valid email address for yeneyeneta account.
                    </div>
                  </div>
                  <div class="form-group">
                    <select class="form-control" autocomplete="off" name="school" required>
                      <option value="yehemdar-school" <?php echo set_select('school', 'yehemdar-school'); ?>>Yehemdar Family School</option>
                      <option value="dt-acadamy" <?php echo set_select('school', 'dt-acadamy'); ?>>Dt acadamy</option>
                      <option value="repi-abel-school" <?php echo set_select('school', 'repi-abel-school'); ?>>Repi abel school</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select your school.
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                        <select class="form-control" autocomplete="off" name="userstatus" required>
                          <option value="" selected disabled>I am..</option>
                          <option value="student" <?php echo set_select('userstatus', 'student'); ?>>I am a student</option>
                          <option value="teacher" <?php echo set_select('userstatus', 'teacher'); ?>>I am a teacher</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select your Status.
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <select name="grade" id="input-status" class="form-control" required>
                             <option value="" selected disabled>Grade</option>
                              <option value="1" <?php echo set_select('grade', '1'); ?>>Grade 1</option>
                              <option value="2" <?php echo set_select('grade', '2'); ?>>Grade 2</option>
                              <option value="3" <?php echo set_select('grade', '3'); ?>>Grade 3</option>
                              <option value="4" <?php echo set_select('grade', '4'); ?>>Grade 4</option>
                              <option value="5" <?php echo set_select('grade', '5'); ?>>Grade 1</option>
                              <option value="6" <?php echo set_select('grade', '6'); ?>>Grade 1</option>
                              <option value="7" <?php echo set_select('grade', '7'); ?>>Grade 7</option>
                              <option value="8" <?php echo set_select('grade', '8'); ?>>Grade 8</option>
                              <option value="9" <?php echo set_select('grade', '9'); ?>>Grade 9</option>
                              <option value="10" <?php echo set_select('grade', '10'); ?>>Grade 10</option>
                              <option value="11" <?php echo set_select('grade', '11'); ?>>Grade 11</option>
                              <option value="12" <?php echo set_select('grade', '12'); ?>>Grade 12</option>
                              <option value="universty-first-year" <?php echo set_select('grade', 'universty-first-year'); ?>>universty first year</option>
                              <option value="universty-second-year" <?php echo set_select('grade', 'universty-second-year'); ?>>universty second year</option>
                              <option value="universty-third-year" <?php echo set_select('grade', 'universty-third-year'); ?>>universty third year</option>
                              <option value="universty-fourth-year" <?php echo set_select('grade', 'universty-fourth-year'); ?>>universty fourth year</option>
                              <option value="universty-fifth-year" <?php echo set_select('grade', 'universty-fifth-year'); ?>>universty fifth year</option>
                              <option value="universty-sixth-year" <?php echo set_select('grade', 'universty-sixth-year'); ?>>universty sixth year</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select your Grade.
                        </div>
                     </div>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" autocomplete="off" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password" required>
                      <div class="invalid-feedback">
                        Please enter your password your password must be at least 6 characters.
                      </div>
                    </div>

                      <input type="submit" value="Sign Up" name="register" class="btn btn-outline-orange btn-block">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- EXPLORE HEAD -->
  <section id="explore-head-section">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="p-5">
            <h1 class="display-4">Explore</h1>
            <p class="lead">Find many many quality questions to test and challenge yourself and be better person tomorrow.</p>
            <a href="#home-section" class="btn btn-outline-orange">Find Out More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPLORE SECTION -->
  <section id="explore-section" class="bg-yeneta text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>assets/img/2.jpeg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Ask & Answer</h3>
             <blockquote class="blockquote text-right">
              <p>"To ask the right question is harder than to answer it."</p>
              <footer class="blockquote-footer">Georg Cantor</footer>
            </blockquote>
          <div class="d-flex flex-row">
            <div class="p-4 align-self-start">
              <i class="fa fa-check"></i>
            </div>
            <div class="p-4 align-self-end">
              Our company belives that the world changed by those who ask, the world is changing by those who ask and the world will change by those who ask and never satisfy with the status quo.
            </div>
          </div>
          <div class="d-flex flex-row">
            <div class="p-4 align-self-start">
              <i class="fa fa-check"></i>
            </div>
            <div class="p-4 align-self-end">
              Our mission is connecting those who ask and answer to make the world a better place.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!-- MAIN FOOTER -->
    <footer id="main-footer" class="">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="py-4">
              <h1 class="h3">YeneYeneta inc,</h1>
              <p>Copyright &copy; 2017-2018 Ze Elshama</p>
              <a class="" data-toggle="modal" data-target="#contactModal" href="#">Contact Us </a>|
              <a class="" data-toggle="modal" data-target="#termsModal" href="#"> Terms </a>|
              <a class="" data-toggle="modal" data-target="#infoModal" href="#"> Why ?</a>
            </div>
          </div>
        </div>
      </div>
    </footer> 
     
            <!---***************************************     A banch  of models        *****************************************-->

    <!-- LOGIN MODAL -->
<div class="modal fade text-dark" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactmodaltitle">
                    <span class="brand">YENE YENETA</span>
                    Login
                </h5>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body modal-dismissible">
                <div class="row">
                    <div class="col-md-11 col-sm-12">
                        <?php
                        echo validation_errors() ?>
                        <?php
                        if($this->session->flashdata('login_failed')): ?>
                        <?php
                        echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed'). '</P>' ; ?>
                        <?php
                        endif; ?>
                        <form action="<?php base_url() ?>users/login" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" required autofocus>
                            <div class="invalid-feedback">
                              Please enter your username to login.
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                            <div class="invalid-feedback">
                              Enter your password!
                             </div>
                        </div>
                        <button type="submit" class="btn btn-outline-orange btn-block" name="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

<!-- aboutmodel -->

<div class="modal fade text-dark modal-dismissible" id="infoModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infomodaltitle">
                    <span class="brand">YENE YENETA</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <h3>What is the purpose of life:- </h3>
                <p>"In our opinion life is all about giving and sharing what we have actually we will not survive with out the help of each others. for us teachers are heros that's why we work on yeneyeneta.com (this web application) to make students and teachers life easier and connect every single student and teacher in the world with knowledge. if you want to know the motivation behind <a href="https://www.yeneyeneta.com">yeneyeneta</a>"  <br> <b>Natnael Getenew</b> :- Founder Ceo. </p>
            </div>
        </div>
    </div>
</div>


<!-- Terms modal-->

<div class="modal fade text-dark modal-dismissible" id="termsModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactmodaltitle">
                    <span class="brand">YENETA</span>
                    terms and privecy
        
                </h5>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <h3>When you use yeneyeneta.com you must agree to:- </h3>
                <p>
                    When you use <span class="brand">YENETA</span>
                    you may occasionally receive message<br>you may get email notification or message about your account from the company at any time. And also we use cookies for your best website experiance. 
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Contact modal-->
<div class="modal fade text-dark modal-dismissible" id="contactModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactmodaltitle">
                    <span class="brand">YENETA</span>
                    Contact Us
        
                </h5>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Contact</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <p><i class="fa fa-map-marker"></i> Addis Ababa, ETHIOPIA</p>
                        </div>
                        <div class="single-contact d-flex mb-30">                            
                            <p><i class="fa fa-phone"></i> Main: +251 97 391 6392</p>
                        </div>
                        <div class="single-contact d-flex">                           
                            <p><i class="fa fa-envelope-o"></i> contact@yeneyeneta.com</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>sw_cached_site.js"></script>
  </body>
</html>


