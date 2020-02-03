<?php 

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

<div class="container">
    <div class="container-fluid p-0">
        <div class="nav-scroller bg-white box-shadow">
            <nav class="nav nav-underline text-lg-center">
                <a class="nav-link profile-link " href="#about">
                    <i class="fa fa-info"></i>
                    About
                </a>
                <a href="#questions" class="nav-link profile-link">
                    <i class="fa fa-question"></i>
                    Questions
                </a>
                <a class="nav-link profile-link" href="#answers">
                    <i class="fa fa-comment"></i>
                    Answers 
                </a>
                <a class="nav-link profile-link" href="#bio">
                    <i class="fa fa-user"></i>
                    Bio
                </a>
        </div>
</nav>
<a class="navbar-brand js-scroll-trigger" href="#page-top">
    <span class="d-block d-lg-none">
        Yeneta 
           <span class="text-warning">
        <?php
        echo $user['usertitle']; ?>
        <?php
        echo $user['username']; ?>
        </span>
    </span>
    <span class=""></span>
</a>
<section class="p-3  d-flex d-column col-md-9 ml-auto" id="about">
    <div class="my-auto frontprofile">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url()?>assets/images/avatar/<?php echo $user['user_image']; ?>" alt="">
        <h1 class="mb-0">
            <?php
            echo ucfirst($user['usertitle']); ?>
            <span class="text-orange">
            <?php
            echo ucfirst($user['username']); ?>
            </span>
        </h1>
        <div class="subheading mb-5">
            <?php
            echo $user['userstatus']; ?>
            at 
            <?php
            echo $user['school']; ?>
            <a href="mailto:<?php echo $user['email']; ?>">
            <?php
            echo $user['email']; ?>
            </a>
        </div>
       <?php if($user['gender']): ?> <h3 class="">gender: <b class="ml-3"><?php echo $user['gender']; ?></b></h3> <?php endif; ?>
       <?php if($user['grade']): ?><h3 class="mb-5">grade: <b class="ml-3"><?php echo $user['grade']; ?></b></h3> <?php endif; ?>
    </div>
</section>

<!--     question section   -->

<section id="questions" class="p-3 p-lg-5 d-flex flex-column">
    <div class="my-auto">
        <h2 class="mb-5 text-center text-orange"><?php if($questions){$numquestion = count($questions);  echo $numquestion;}   ?> Question(s)</h2>
        <?php
        foreach ($questions as $question): ?>
        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h4 class="mb-0">
            <a href="<?php echo site_url('/questions/'.$question['slug']); ?>">
                <?php echo $question['question']; ?>
            </a>
                </h4>
                <div class="subheading mb-3"></div>
                <p>.</p>
            </div>
            <div class="resume-date text-md-right">
                <span class="text-primary">
                <?php
                echo time_elapsed_string($question['asked_at']); ?>
                </span>
            </div>
        </div>
        <hr>
        <?php
        endforeach; ?>
    </div>
</section>

<!--     Answer section   -->

<section class="p-3 p-lg-5 d-flex flex-column" id="answers">
    <div class="my-auto">
        <h2 class="mb-5 text-center text-orange"><?php if($answers){$num_of_answers = count($answers);  echo $num_of_answers;}  ?> Answer(s)</h2>
        <?php
        foreach ($answers as $answer): ?>
        <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
                <h3 class="mb-0"></h3>
                <div class="subheading mb-3"></div>
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <h4 class="mb-0">
                    <a href="<?php echo site_url('/questions/'.$question['slug']); ?>">
                        <?php echo $answer['answer']; ?>
                    </a>
                        </h4>
                        <div class="subheading mb-3"></div>
                        <p>.</p>
                    </div>
                </div>
            </div>
            <div class="resume-date text-md-right">
                <span class="text-primary">
                    <?php
                        echo time_elapsed_string($answer['answered_at']); ?>
                </span>
            </div>
        </div>
        <hr>
         <?php
        endforeach; ?>
    </div>
</section>

<section class="p-3 p-lg-5 d-flex flex-column" id="bio">
    <div class="my-auto">
        <h2 class="mb-5 text-center text-orange">Bio</h2>
        <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
                <h3 class="mb-0"></h3>
                <div class="subheading mb-3"></div>
                <p><?php echo $user['bio']; ?></p>
            </div>
            <div class="resume-date text-md-right">
                <span class="text-primary"></span>
            </div>
        </div>
    </div>
</section>
</ul></div></section></div></div><style>
    img.img-fluid.img-profile.rounded-circle.mx-auto.mb-2 {
        width: 200px;
        height: 200px;
        margin-left: 50% !important;
        border: .5rem solid rgba(255, 91, 0, 0.36) !important;
    }

    a.nav-link.profile-link {
        width: 25%;
    }

    img.img-fluid.img-profile.rounded-circle.mx-auto.mb-2 {
        margin-left: 120px !important;
    }

    .frontprofile {
        border: 1px #33333359 solid;
        padding: 20px;
        box-shadow: 13px 11px 8px 6px #00000094;
        padding-bottom: 0px;
        transition: 2s ease;
    }

    .frontprofile:hover {
        box-shadow: -20px 28px #0000004a;
    }
    
    a.nav-link.profile-link:hover {
        border: 1px #ff5b00 solid;
    }

    section#questions {
        margin-top: 40px;
    }
</style>
