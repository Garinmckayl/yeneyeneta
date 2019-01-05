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
        <button type="button" class="close" data-dismiss="modal">�</button>
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
<meta name="description" content="<?php echo strip_tags($question['question']); ?> question for grade <?php echo $question['grade']; ?> by <?php echo $question['usertitle'];?> <?php echo $question['username'];?>">
<meta name="keywords" content="questions, students, teachers, education, find-teacher-online">
<meta name="author" content="YeneYeneta, inc.">
<title>Yeneta-<?php echo $question['username'];?>-<?php echo $question['subject']; ?></title>
<link rel="icon" type="text/css" href="<?php echo base_url() ?>favicon.ico">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/offcanvas.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
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
        <img class="img-fluid img-profile" src="yenetalogo.png" alt="">
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
                        <span class="hidden-xs hidden-sm hidden-md">Questions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>y/<?php echo $this->session->userdata('username'); ?>" title="myquestions" class="nav-link">
                        <i class="fa fa-puzzle-piece"></i>
                        <span class="hidden-xs hidden-sm hidden-md">MY Questions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>questions/add" title="Add question" class="nav-link">
                        <i class="fa fa-plus"></i>
                        <span class="hidden-xs hidden-sm hidden-md">Add question</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <p class="mx-2">comming soon features</p>
                <div class="commingsoon-dropdown">
                    <a href="<?php echo base_url();?>createexam" title="Create Exam" data-loading-text="Loading..." class="dropdown-item" title="My profile">
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
                    <a href="<?php site_url()?>teachers" target="_blank" title="Find teacher to hire" class="dropdown-item">
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
        <?php }else{ ?>  
                <li class="nav-item">
                    <a href="<?php echo base_url();?>questions" title="questions" class="nav-link">
                        <i class="fa fa-question-circle"></i>
                        <span class="hidden-xs hidden-sm hidden-md">Questions</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="" title="Yeneta Blog" class="nav-link" data-toggle="modal" data-target="#loginmodal">
                        <i class="fa fa-sign-in"></i>
                        <span class="hidden-xs hidden-sm hidden-md">Login</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="" title="Yeneta Blog" class="nav-link" data-toggle="modal" data-target="#signupmodal">
                        <i class="fa fa-user"></i>
                        <span class="hidden-xs hidden-sm hidden-md">Signup</span>
                    </a>
                </li>
        <?php } ?>  
        </ul>
    </div>

    <?php
    echo form_open('questions/search'); ?>
    <form class="form-inline my-2 my-lg-0 search-nav">
        <div class="input-group search-nav">
            <input type="text" class="form-control" name="search" placeholder="search questions..." required>
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary btn-secondary-search">
                    <span>
                        <i class="fa fa-search"></i>
                    </span>
                </button>
            </div>
        </div>
    </form>

<?php if($this->session->userdata('user_id')): ?> 

    <img class="img-fluid img-profile rounded-circle smallimg img-right" src="<?php echo base_url()?>assets/images/avatar/<?php echo $question['user_image']; ?>" alt="">
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



 


			<?php
if($this->session->userdata('user_id') == $question['user_id']): ?>
<hr>
<a class="btn btn-primary pull-left" title="edit" href="<?php echo base_url(); ?>questions/edit/<?php echo $question['slug']; ?>">
    <i class="fa fa-pencil"></i>
</a>

<button type="submit" value="delete" class="btn btn-danger" data-toggle="modal" data-target="#confirm_delete_question" title="delete">
    <i class="fa fa-trash-o"></i>
</button>

<?php
endif; ?>


<?php //require .echo base_url();.'/includes/functions.php'; 

/**
 * Custom function to change timestame to time ago. 
 *
 */

  function time_elapsed_string($datetime, $full = false) 
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v)
        {
            if ($diff->$k) 
            {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } 
            else 
            {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

?>



<main role="main" class="container">
    <div class="card mb-3 col-md-12">
        <div class="card-body">
            <div class="media text-muted pt-3">
               <a href="#" data-toggle="modal" data-target="#viewphoto"><img src="<?php echo base_url() ?>assets/images/avatar/<?php echo $question['user_image']; ?>" alt="" class="mr-2 rounded smallimage"></a>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark"><?php echo $question['username'];?><small class=""> <?php echo $question['userstatus']; ?> at <?php echo $question['school']; ?></small></strong>
                    in 
                    <?php
                    echo $question['subject']; ?>
                    for Grade 
                    <?php
                    echo $question['grade']; ?>
                      <i class="fa fa-clock-o"></i>
                    <?php
                    echo time_elapsed_string($question['asked_at']); ?>
                </p>
            </div>
            <?php
            echo $question['question']; ?>
        </div>
        <hr class="my-0">
        <div class="card-body py-2 small text-center social" id="social" role="tablist">

       <?php if($this->session->userdata('user_id')): ?>      

            <a class="mr-3 d-inline-block" href="#answercollapse" id="answer-btn" data-parent="#social" data-toggle="">
                <i class="fa fa-fw fa-comment"></i>
                Answer
            </a><hr>

        <?php endif; ?>

         <!--   <a class="d-inline-block" href="#">
                <i class="fa fa-fw fa-download"></i>
                Download
                    
            </a>  -->
        </div>
        <!--        Answer collapseable  -->
        
        <hr class="my-0">

    <?php if($answers) : ?>
        <?php $total_ans = count($answers); ?>
         <div class="card-body small bg-faded"><h2 class="text-center mb-3">Answers(<?php echo $total_ans ?>)</h2>
        <?php foreach($answers as $answer) : ?>
            <div class="media">
               <a href="#"><img class="d-flex mr-3 smallimage" src="<?php echo base_url() ?>assets/images/avatar/<?php echo $answer['user_image']; ?>"  alt=""></a>
                <div class="media-body">
                    <h6 class="mt-0 mb-1">
                        <a href="#"><?php echo $answer['username']; ?></a>
                    </h6><p><?php echo $answer['userstatus']; ?> at <?php echo $answer['school']; ?></p>
                    <?php echo $answer['answer']; ?>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">download</a>
                        </li>
                    </ul>
                <br>
            </div>
        </div>
     </div>
     <div class="card-footer small text-muted"><i class="fa fa-clock-o"></i> <?php echo time_elapsed_string($answer['answered_at']); ?></div>



        <?php endforeach; ?>
    <?php else : ?>
        <p>No Answers To Display</p>
    <?php endif; ?>

    <div class="modal fade text-dark modal-dismissible" id="viewphoto">
        <button type="button" class="close" data-dismiss="modal">X</button>
    <div class="modal-dialog">
        <div class="modal-content">
           <img class="d-flex mr-3 modelimg " src="<?php echo base_url() ?>assets/images/avatar/<?php echo $question['user_image']; ?>"  alt="">
        </div>
    </div>
</div> 
            
    
    <!--   suggestions  -->
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions (Try this people question)</h6>
    <?php foreach($random_users as $random_user): ?>
        <div class="media text-muted pt-3">
          <img src="<?php echo base_url() ?>assets/images/avatar/<?php echo $random_user['user_image']; ?>" alt="" class="mr-2 rounded smallimage">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark"><?php echo $random_user['username']; ?></strong>

                    <a href="#" id="follow" onclick="follow(<?php echo $random_user['id']; ?>)"><span id="info">Follow</span></a>

                </div>
                <span class="d-block"><?php echo $random_user['userstatus']; ?> at <?php echo $random_user['school']; ?></span>

                <a href="<?php echo base_url()?>y/<?php echo $random_user['username']; ?>">see profile</a>

            </div>
        </div>
    <?php endforeach; ?>
<!--         <small class="d-block text-right mt-3">
            <a href="#">All suggestions</a>
        </small> -->
    </div>
</main>
 
<!--  answer question  -->

<div class="panel-footer fixed-bottom" id="fixed-bottom-answer">
  <div id="answercollapse" class="collapse show">
            <?php echo validation_errors(); ?>
        <?php echo form_open('answers/create/'.$question['question_id']); ?>
            <div class="card-body">
                <div>
                    <textarea id="btn-input" type="text" name="createAnswer" class="form-control input-sm" placeholder="Type your Answer here..." required></textarea>
                    <span>
                        <input type="hidden" name="slug" value="<?php echo $question['slug']; ?>">
                        <input class="btn btn-orange btn-md btn-answer btn-block" id="btn-chat" value="Answer" type="submit">
                    </span>
                </div>
            </div>
        </form>
    </div>
    </div>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ckeditor/question/add/ckeditor.js"></script>
<script>
    CKEDITOR.replace('createAnswer');
</script>

<style>
    .cke_reset {
    height: 100px !important;
    width: 100%;
    }
.btn-answer {
    margin-top: 70px !important;
}

@media(max-width: 440px){
    .btn-answer{
            margin-top: 100px !important;
    }
}

  .smallimage{
     height: 40px;
     width: 45px;
  }
  .modelimg{
    height: 400px;
    width: 100%;
  }
</style>


<!--  confirm delete question -->
<?php
echo form_open('/questions/delete/'.$question['question_id']); ?>
    <div class="modal fade" id="confirm_delete_question" tabindex="-1" role="dialog" aria-labelledby="confirmlogout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmlogout">Are you sure to delete the question?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "DELETE" below if you are sure to delete your current question or cancel if you change your mind.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input class="btn btn-primary" type="submit" value="Delete">
                </div>
            </div>
        </div>
    </div>
</form>



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
            <option value="Yehemdar Academy" <?php echo  set_select('school', 'Yehemdar Academy'); ?>>Yehemdar Academy</option>
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