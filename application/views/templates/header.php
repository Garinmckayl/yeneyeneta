

<!--    question added  -->
<?php
if($this->session->flashdata('question_added')): ?>
<?php
echo '<p class="alert alert-success alert-dismissible"> <i class="fa fa-check-circle"></i> Success: '.$this->session->flashdata('question_added'). '<button type="button" class="close" data-dismiss="alert">�</button></P>' ; ?>
<?php
endif; ?>
<!--    question updated  -->
<?php
if($this->session->flashdata('question_updated')): ?>
<?php
echo '<p class="alert alert-success alert-dismissible"> <i class="fa fa-check-circle"></i> Success: '.$this->session->flashdata('question_updated'). '<button type="button" class="close" data-dismiss="alert">�</button></P>' ; ?>
<?php
endif; ?>
<!--    question deleted  -->
<?php
if($this->session->flashdata('question_deleted')): ?>
<?php
echo '<p class="alert alert-success alert-dismissible"> <i class="fa fa-check-circle"></i> Success: '.$this->session->flashdata('question_deleted'). '<button type="button" class="close" data-dismiss="alert">�</button></P>' ; ?>
<?php
endif; ?>

<div id="container">
    <div id="content">
        <div class="modal fade text-dark modal-dismissible" id="profilemodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactmodaltitle">
                            <span class="brand">YENETA</span>
                            Upload profile image
        
                        </h5>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <?php
                    echo validation_errors(); ?>
                    <?php
                    echo form_open_multipart('users/avatar'); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <span>click here to choose an image</span>
                            <input type="file" name="avatar" class="form-control " accept="image" required>
                        </div>
                        <input type="submit" class="btn btn-block" name="submit">
                    </div>
                    <?php
                    echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="modal fade text-dark modal-dismissible" id="youraccount">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactmodaltitle">
                            <span class="brand">YENETA</span>
                            your account
        
                        </h5>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <h3>This account help you for:- </h3>
                        <p>
                            Sharing your question and your blog post but for only reading blog posts and reading questions , download question you don't need to create <span class="brand">YENETA</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="confirmlogout" tabindex="-1" role="dialog" aria-labelledby="confirmlogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmlogout">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo base_url();?>users/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!--   </div> -->
        <!-- </div> -->
        <!doctype html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="largest online directory in the world for international questions.">
                <meta name="keywords" content="questions, teachers, education, find-teacher-online">
                <meta name="author" content="YeneYeneta, inc.">
                <title>Yeneta-Questions</title>
                <link rel="icon" type="text/css" href="<?php echo base_url() ?>favicon.ico">
                                <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
                <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
                <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                <link href="<?php echo base_url(); ?>assets/css/offcanvas.css" rel="stylesheet">
                <style>
                    li.nav-item.active {
                        margin-top: -15px;
                    }
                </style>
            </head>
            <body class="bg-light">

              <div id="preloader">
                 <div class="circle-preloader"></div>
             </div>

                <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                    <a class="navbar-brand mr-auto mr-lg-0 d-none d-sm-block" href="#">
                        <img class="img-fluid img-profile" src="" alt="">
                    </a>
                    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/yenetalogo.png">
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <?php if($this->session->userdata('user_id')){ ?>
                                  <li class="nav-item">
                                      <a href="<?php echo base_url();?>questions" title="questions" class="nav-link">
                                          <i class="fa fa-question-circle"></i>
                                          <span class="">Questions</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?php echo base_url();?>y/<?php echo $this->session->userdata('username'); ?>#questions" title="myquestions" class="nav-link">
                                          <i class="fa fa-puzzle-piece"></i>
                                          <span class="">MY Questions</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?php echo base_url();?>questions/add" title="Add question" class="nav-link">
                                          <i class="fa fa-plus"></i>
                                          <span class="">Add question</span>
                                      </a>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="<?php echo base_url() ?>assets/img/yenetafont.png" style="margin-top: -5px;">My Yeneta
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                                        <a href="<?php echo base_url();?>y/<?php echo $this->session->userdata('username'); ?>" title="My job" class="dropdown-item" title="My profile">
                                            <i class="fa fa-bullhorn"></i>
                                            <span>My Profile</span>
                                        </a>
                                      <a href="<?php echo base_url(); ?>user/editaccount/<?php echo $this->session->userdata('user_id'); ?>" class="dropdown-item">
                                            <span>
                                                <i class="fa fa-gear"></i>
                                            </span>
                                            <span>Edit Profile</span>
                                        </a>
                                        <hr>
                                    <div class="commingsoon-dropdown">
                                        <p>comming soon features</p>
                                        <a href="<?php echo base_url();?>commingsoon" title="Create Exam" data-loading-text="Loading..." class="dropdown-item" title="My profile">
                                            <i class="fa fa-pencil-square-o"></i>
                                            <span>Create Exam</span>
                                        </a>
                                        <a href="<?php echo base_url(); ?>commingsoon" target="_blank" title="Mytutor!" class="dropdown-item">
                                            <i class="fa fa-book"></i>
                                            <span class="hidden-xs hidden-sm hidden-md">My tutor</span>
                                        </a>
                                         <a href="<?php echo base_url(); ?>commingsoon" target="_blank" title="Mytutor!" class="dropdown-item">
                                            <i class="fa fa-book"></i>
                                            <span class="hidden-xs hidden-sm hidden-md">YenetaExams</span>
                                        </a>
                                        <a href="<?php echo base_url(); ?>commingsoon" target="_blank" title="Mytutor!" class="dropdown-item">
                                            <i class="fa fa-list-alt"></i>
                                            <span class="hidden-xs hidden-sm hidden-md">Yeneta Blog</span>
                                        </a>
                                        <a href="<?php base_url()?>commingsoon" target="_blank" title="Find teacher to hire" class="dropdown-item">
                                            <span class="hidden-xs hidden-sm hidden-md">
                                                <i class="fa fa-male"></i>
                                                <i class="fa fa-female"></i>
                                            </span>
                                            <span>Find Teacher</span>
                                        </a>
                                    </div>    
                                        <hr>
                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#confirmlogout">
                                            <i class="fa fa-sign-out"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                          <?php }else{ ?>   <!--  if the doesn't login  -->
                                    <li class="nav-item">
                                      <a href="<?php echo base_url();?>questions" title="questions" class="nav-link">
                                          <i class="fa fa-question-circle"></i>
                                          <span class="hidden-xs hidden-sm hidden-md">Questions</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?php echo base_url();?>posts" title="Yeneta Blog" class="nav-link" data-toggle="modal" data-target="#loginmodal">
                                          <i class="fa fa-sign-in"></i>
                                          <span class="hidden-xs hidden-sm hidden-md">Login</span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?php echo base_url();?>posts" title="Yeneta Blog" class="nav-link" data-toggle="modal" data-target="#signupmodal">
                                          <i class="fa fa-user"></i>
                                          <span class="hidden-xs hidden-sm hidden-md">SignUp</span>
                                      </a>
                                  </li>

                         <?php } ?>
                        </ul>
                    </div>
                    <?php
                    echo form_open('questions/search'); ?>
                    <form class="form-inline my-2 my-lg-2 search-nav">
                        <div class="input-group search-nav">
                            <input type="text" class="form-control search-input" name="search" id="search-nav" placeholder="search questions..." required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary btn-secondary-search">
                                    <span>
                                        <i class="fa fa-search"></i>
                                    </span>
                                </button>
                            </div>
                        </div>                          
                    </form>
              </div>
          </div>
                    <?php if($this->session->userdata('user_id')): ?>
                        <img class="img-fluid img-profile rounded-circle smallimg img-right" src="<?php echo base_url()?>assets/images/avatar/<?php echo $user['user_image']; ?>" alt=""> <span class="navuser d-none d-lg-block"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?></span>
                        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <?php endif; ?>
                </nav>
                <div class="nav-scroller bg-white box-shadow">
                    <nav class="nav nav-underline">
                        <a class="nav-link active" href="#">Subjects</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Art'); ?>">Art</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Astrology'); ?>">Astrology</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Biology'); ?>">Biology</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/chemistry'); ?>">chemistry</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Computer-Science'); ?>">Computer Science</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/General-Knowledge'); ?>">General Knowledge</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Geography'); ?>">Geography</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/History'); ?>">History</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/IQ-test'); ?>">IQtest</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Mathematics'); ?>">Mathematics</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Medical'); ?>">Medical</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Music'); ?>">Music</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/New-trend'); ?>">New trend</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/other'); ?>">other</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/physics'); ?>">physics</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/philosophy-and-psychology'); ?>">philosophy and psychology</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/social-science'); ?>">social science</a>      
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/software-Development'); ?>">software Development</a>
                        <a class="nav-link" href="<?php echo site_url('/questions/categories/Sport'); ?>">Sport</a>
                    </nav>
                </div>
 


<div class="modal fade text-dark" id="loginmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactmodaltitle">
                    <span class="brand">YENE YENETA</span>
                    Login
        
                </h5>
            </div>
            <div class="modal-body">
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
                        <?php
                        echo form_open('users/login');?>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" value="" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                            <input type="hidden" name="page" value="question">
                        </div>
                        <button type="submit" class="btn btn-outline-dark btn-block" name="submit">Login</button>
                        <?php
                        echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





   <div class="modal fade text-dark modal-dismissible" id="signupmodal">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            signUp
        </div>

 <?php
    echo validation_errors() ?>
    <?php
    echo form_open('users/register'); ?>
    <div class="form-group">
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" maxlength="32" class="form-control" placeholder="User Name*" required>
    </div>
    <div class="form-group">
        <select name="userstatus" value="<?php echo set_value('userstatus'); ?>" class="form-control" required>
            <option selected disabled>what are you doing</option>
            <option value="None" <?php echo  set_select('userstatus', 'None'); ?>>None</option>
            <option value="Teacher" <?php echo  set_select('userstatus', 'Teacher'); ?>>I am Teacher</option>
            <option value="Student" <?php echo  set_select('userstatus', 'Student'); ?>>I am student</option>
<!--               <option value="Dr.">Dr.</option>
            <option value="Miss.">Miss.</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Prof.">Prof.</option>
            <option value="Rev .">Rev .</option>
            <option value="Rev . Fr">Rev . Fr .</option> -->
        </select>
    </div>

    <div class="form-group">
        <select name="school" id="input-status" class="form-control" required>
            <option selected="selected" value="" disabled>School*</option>
            <option value="none" <?php echo  set_select('school', 'none'); ?> >none</option>
            <option value="i am not student" <?php echo  set_select('school', 'i am not student'); ?>>I am not student</option>
<!--             <option value="Abema Elementary & Junior Secondary School"<?php echo  set_select('school', 'Abema Elementary & Junior Secondary School'); ?>>Abema Elementary &Junior Secondary School</option>
            <option value="Abiot Kirs secondary School"<?php echo  set_select('school', 'Abiot Kirs secondary School'); ?>>Abiot Kirs secondary School</option>
            <option value="Addis Ketema Secondary School"<?php echo  set_select('school', 'Addis Ketema Secondary School'); ?>>Addis Ketema Secondary School</option>
            <option value="Adama No 3 Primary and JuniorSecondary School"<?php echo  set_select('school', 'Adama No 3 Primary and JuniorSecondary School'); ?>>Adama No 3 Primary and JuniorSecondary School</option>
            <option value="Adama Secondary School" <?php echo  set_select('school', 'Adama Secondary School'); ?>>Adama Secondary School</option>
            <option value="Agazi Comprehensive High School" <?php echo  set_select('school', 'Agazi Comprehensive High School'); ?>>Agazi Comprehensive High School</option>
            <option value="Andinet International School" <?php echo  set_select('school', 'Andinet International School'); ?>>Andinet International School</option>
            <option value="Alpha Keraneyio School" <?php echo  set_select('school', 'Alpha Keraneyio School'); ?>>Alpha Keraneyio School</option>
            <option value="Arsema Youth Academy" <?php echo  set_select('school', 'Arsema Youth Academy'); ?>>Arsema Youth Academy</option>
            <option value="Assay School" <?php echo  set_select('school', 'Assay School'); ?>>Assay School</option>
            <option value="Ayer Tena Secondary school"<?php echo  set_select('school', 'Ayer Tena Secondary school'); ?>>Ayer Tena Secondary school</option>
            <option value="Awolia Muslim Mission shool" <?php echo  set_select('school', 'Awolia Muslim Mission shool'); ?>>Awolia Muslim Mission shool</option>
            <option value="Asela Preparatory School"<?php echo  set_select('school', 'Asela Preparatory School'); ?>>Asela Preparatory School</option>
            <option value="BeteSeb Academy" <?php echo  set_select('school', 'BeteSeb Academy'); ?>>BeteSeb Academy</option>
            <option value="Bethel Mekane Yesus school" <?php echo  set_select('school', 'Bethel Mekane Yesus school'); ?>>Bethel Mekane Yesus school</option>
            <option value="Bingham Academy" <?php echo  set_select('school', 'Bingham Academy'); ?>>Bingham Academy</option>
            <option value="British International school"<?php echo  set_select('school', 'British International school'); ?>>British International school</option>
            <option value="Bole senior Secondary and Preparatory School" <?php echo  set_select('school', 'Bole senior Secondary and Preparatory School'); ?>>Bole senior Secondary and Preparatory School</option>
            <option value="Bright Future School" <?php echo  set_select('school', 'Bright Future School'); ?>>Bright Future School</option>
            <option value="Cistercian Monastery" <?php echo  set_select('school', 'Cistercian Monastery'); ?>>Cistercian Monastery</option>
            <option value="Chilalo Terara Secondary School"<?php echo  set_select('school', 'Chilalo Terara Secondary School'); ?>>Chilalo Terara Secondary School</option>
            <option value="Cordova Academy" <?php echo  set_select('school', 'Cordova Academy'); ?>>Cordova Academy</option>
            <option value="CyberWorld Institute of Computer" <?php echo  set_select('school', 'CyberWorld Institute of Computer'); ?>>CyberWorld Institute of Computer</option>
            <option value="Debre Markos Senior Secondary Comprehensive School" <?php echo  set_select('school', 'Debre Markos Senior Secondary Comprehensive School'); ?>>Debre Markos Senior Secondary Comprehensive School</option>
            <option value="Didea Secondary and Preparatory School" <?php echo  set_select('school', 'Didea Secondary and Preparatory School'); ?>>Didea Secondary and Preparatory School</option>
            <option value="Dilchibo Junior & Secondary School" <?php echo  set_select('school', 'Dilchibo Junior & Secondary School'); ?>>Dilchibo Junior &Secondary School</option>
            <option value="El-Bethel academy" <?php echo  set_select('school', 'El-Bethel academy'); ?>>El-Bethel academy</option>
            <option value="English Alive Academy" <?php echo  set_select('school', 'English Alive Academy'); ?>>English Alive Academy</option>
            <option value="Ethioparents school" <?php echo  set_select('school', 'Ethioparents school'); ?>>Ethioparents school</option>
            <option value="Future Talent international Academy" <?php echo  set_select('school', 'Future Talent international Academy'); ?>>Future Talent international Academy</option>
            <option value="Fountain of Knowledge School" <?php echo  set_select('school', 'Fountain of Knowledge School'); ?>>Fountain of Knowledge School</option>
            <option value="Gibson school systems" <?php echo  set_select('school', 'Gibson school systems'); ?>>Gibson school systems</option>
            <option value="Ghion Secondary and Preparatory School" <?php echo  set_select('school', 'Ghion Secondary and Preparatory School'); ?>>Ghion Secondary and Preparatory School</option>
            <option value="Hawas Preparatory School" <?php echo  set_select('school', 'Hawas Preparatory School'); ?>>Hawas Preparatory School</option>
            <option value="Hibret Fire" <?php echo  set_select('school', 'Hibret Fire'); ?>>Hibret Fire</option>
            <option value="international Community school of A.A" <?php echo  set_select('school', 'international Community school of A.A'); ?>>international Community school of A.A</option>
            <option value="Istituto statale italiano di A.A" <?php echo  set_select('school', 'Istituto statale italiano di A.A'); ?>>Istituto statale italiano di A.A</option>
            <option value="Kidame Gebeya High School" <?php echo  set_select('school', 'Kidame Gebeya High School'); ?>>Kidame Gebeya High School</option>
            <option value="Kids New Flower" <?php echo  set_select('school', 'Kids New Flower'); ?>>Kids New Flower</option>
            <option value="LionHeart Academy" <?php echo  set_select('school', 'LionHeart Academy'); ?>>LionHeart Academy</option>
            <option value="Lideta Catholic Cathedral school" <?php echo  set_select('school', 'Lideta Catholic Cathedral school'); ?>>Lideta Catholic Cathedral school</option>
            <option value="School of Indiana" <?php echo  set_select('school', 'School of Indiana'); ?>>School of Indiana</option>
            <option value="Lyc�e Guebre-Mariam" <?php echo  set_select('school', 'Lyc�e Guebre-Mariam'); ?>>Lyc�e Guebre-Mariam</option>
            <option value="Menelik II School" <?php echo  set_select('school', 'Menelik II School'); ?>>Menelik II School</option>
            <option value="Memhir Akalewold Secondary Preparatory School" <?php echo  set_select('school', 'Memhir Akalewold Secondary Preparatory School'); ?>>Memhir Akalewold Secondary Preparatory School</option>
            <option value="Millennium Secondary & preparatory school" <?php echo  set_select('school', 'Millennium Secondary & preparatory school'); ?>>Millennium Secondary &preparatory school</option>
            <option value="Memehere Akale Wolde Preparatory School" <?php echo  set_select('school', 'Memehere Akale Wolde Preparatory School'); ?>>Memehere Akale Wolde Preparatory School</option>
            <option value="Medhanialem Secondary and Preparatory School" <?php echo  set_select('school', 'Medhanialem Secondary and Preparatory School'); ?>>Medhanialem Secondary and Preparatory School</option>
            <option value="Menkorer secondary school Ethio-Japan secondary school" <?php echo  set_select('school', 'Menkorer secondary school Ethio-Japan secondary school'); ?>>Menkorer secondary school Ethio-Japan secondary school</option>
            <option value="Nejashi Ethio-Turkish International Schools" <?php echo  set_select('school', 'Nejashi Ethio-Turkish International Schools'); ?>>Nejashi Ethio-Turkish International Schools</option>
            <option value="Nazareth School" <?php echo  set_select('school', 'Nazareth School'); ?>>Nazareth School</option>
            <option value="Nigus Tekle Haymanot Elementary & Junior Secondary School" <?php echo  set_select('school', 'Nigus Tekle Haymanot Elementary & Junior Secondary School'); ?>>Nigus Tekle Haymanot Elementary &Junior Secondary School</option>
            <option value="One Planet International School" <?php echo  set_select('school', 'One Planet International School'); ?>>One Planet International School</option>
            <option value="Queen Sheba High School School" <?php echo  set_select('school', 'Queen Sheba High School School'); ?>>Queen Sheba High School</option>
            <option value="Russian Embassy School in Addis Ababa" <?php echo  set_select('school', 'Russian Embassy School in Addis Ababa'); ?>>Russian Embassy School in Addis  Ababa</option>
            <option value="Sandford International School" <?php echo  set_select('school', 'Sandford International School'); ?>>Sandford International School</option>
            <option value="Sedika Secondary School" <?php echo  set_select('school', 'Sedika Secondary School'); ?>>Sedika Secondary School</option>
            <option value="School of Tomorrow" <?php echo  set_select('school', 'School of Tomorrow'); ?>>School of Tomorrow</option>
            <option value="South-West Academy" <?php echo  set_select('school', 'South-West Academy'); ?>>South-West Academy</option>
            <option value="Sophists Academy" <?php echo  set_select('school', 'Sophists Academy'); ?>>Sophists Academy</option>
            <option value="Shirka Secondary and Preparatory School" <?php echo  set_select('school', 'Shirka Secondary and Preparatory School');?>>Shirka Secondary and Preparatory School</option>
            <option value="Tikur Anbessa High School" <?php echo  set_select('school', 'Tikur Anbessa High School'); ?>>Tikur Anbessa High School</option>
            <option value="Teyema Primary School" <?php echo  set_select('school', 'Teyema Primary School'); ?>>Teyema Primary School</option>
            <option value="Tossa Primary School" <?php echo  set_select('school', 'Tossa Primary School'); ?>>Tossa Primary School</option>
            <option value="St. Marys Catholic School" <?php echo  set_select('school', 'St. Marys Catholic School'); ?>>St. Mary's Catholic School+</option>
            <option value="Zoskales Academy" <?php echo  set_select('school', 'Zoskales Academy'); ?>>Zoskales Academy</option>
            <option value="St. Joseph School" <?php echo  set_select('school', 'none'); ?>>St. Joseph School</option> -->
            <option value="Yehemdar Academy" <?php echo  set_select('school', 'Yehemdar Academy'); ?>>Yehemdar Academy</option>
<!--             <option value="Zagol Academy" <?php echo  set_select('school', 'Zagol Academy'); ?>>Zagol Academy</option> -->
        </select>
    </div>
    <div class="form-group">
        <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="User Email*" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="User Pasword*" required>
    </div>
    <input type="submit" name="register" value="Register" class="btn btn-outline-light btn-block">
        <p>by clicking register button you agree to our 
    <a href="#" title="privecy policy" data-toggle="modal" data-target="#contactmodal">privecy policy</a>
</p></div></div>
<?php
echo form_close(); ?>

</div>
</div>
</div>

<script>
      document.getElementById('output').style.visibility = 'hidden';
      document.getElementById('search-nav').addEventListener('input', function(e){
      document.getElementById('output').style.visibility = 'visible';
       searchval = e.target.value;
       $.ajax({
       type: "post",
       url: "<?php echo base_url('questions/search'); ?>",
       data: {search:searchval},
       cache: false,
       success: function(val){
        if(val==0){
          $('#output').html('no results');
        }
        console.log(val);
        $('#output').html(val); 
       }
       });

    });

</script>