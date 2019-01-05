<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="largest online directory in the world for international questions.">
    <meta name="keywords" content="questions, teachers, education, find-teacher-online">
    <meta name="author" content="YeneYeneta, inc.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> yeneta Blog</title>

    <link href="<?php echo base_url(); ?>assets/css/4/bootstrap.min.css" rel="stylesheet">

 
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <style>
      #preloader {
  background: #ff5b00;
 /*background: -webkit-linear-gradient(to right, #14ff00, #FF320B);
  background: linear-gradient(to right, #14ff00, #FF320B);*/
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 5000; }
  #preloader .circle-preloader {
    display: block;
    width: 60px;
    height: 60px;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-bottom-color: #ffffff;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    animation: spin 2s infinite linear; }
@-webkit-keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }
@keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }
    </style>
  </head>

  <body>

            <?php if($this->session->flashdata('login_failed')): ?>
<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed'). '</P>' ; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedout')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout'). '</P>' ; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_registered')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered'). '</P>' ; ?>
<?php endif; ?>

          <?php if($this->session->flashdata('user_loggedin')): ?>
<?php echo '<p class="alert alert-success alert-dismissible">  <i class="fa fa-check-circle"></i> Success: '.$this->session->flashdata('user_loggedin'). '<button type="button" class="close" data-dismiss="alert">×</button></P>' ; ?>
<?php endif; ?>

<div id="preloader">
      <i class="circle-preloader"></i>
</div>

<div id="page-content-wrapper">
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        More categories
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>commingsoon"></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>commingsoon">Biology</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>commingsoon">Chemistry</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>commingsoon">Geography</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>commingsoon">Language</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>commingsoon">Art</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>commingsoon">New Trend</a>
                </li>
            </ul>
        </div>
     </div>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">

          <?php if(!$this->session->userdata('logged_in')) : ?>
           <a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#signupmodal" href="<?php echo base_url();?>users/signup">Sign up</a>
            <a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#loginmodal" href="#">Log in</a>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
           <a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#postmodal" href="<?php echo base_url(); ?>posts/create">Create Post</a>
           <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url(); ?>users/logout">Logout</a>
          <?php endif; ?>



          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">YeneYeneta&trade;</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
    <?php foreach($categories as $category): ?>
<a class="p-2 text-muted" href=""><?php echo $category['name']; ?>   |</a>
     <?php endforeach; ?> 
<a class="p-2 text-muted" href="#menu-toggle" id="menu-toggle">More...</a>

         <!--  <a class="p-2 text-muted" href="#">Mathematics</a>
          <a class="p-2 text-muted" href="#">Physics</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Social Science</a>
          <a class="p-2 text-muted" href="#">Music</a>
          <a class="p-2 text-muted" href="#">Language</a> -->
<!--      <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a> -->
        </nav>
      </div>
      <style>
      	#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled {
  padding-left: 250px;
}

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #000;
  opacity: 0.8;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
}


/* Sidebar Styles */

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #999999;
}

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);
}

.sidebar-nav li a:active, .sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav>.sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}

.sidebar-nav>.sidebar-brand a {
  color: #999999;
}

.sidebar-nav>.sidebar-brand a:hover {
  color: #fff;
  background: none;
}

@media(min-width:768px) {
  #wrapper {
    padding-left: 0;
  }
  #wrapper.toggled {
    padding-left: 250px;
  }
  #sidebar-wrapper {
    width: 0;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
  }
}
      </style>
