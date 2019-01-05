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

<div class="container">
<?php if($this->session->userdata('user_id')): ?>
       <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-orange rounded box-shadow">
        <img class="mr-3 front-img" src="<?php echo base_url()?>assets/images/avatar/<?php echo $user['user_image']; ?>">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Welcome home <?php echo $this->session->userdata('username'); ?></h6>
          <small>we missed you</small>
        </div>
      </div>
<?php endif; ?>

<!--   user logged in message   -->

    <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> Success: '.$this->session->flashdata('user_loggedin'). '<button type="button" class="close" data-dismiss="alert">×</button></P>' ; ?>
    <?php endif; ?>

<!-- user profile update message -->

    <?php if($this->session->flashdata('account_updated')): ?>
        <?php echo '<p class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> Success: '.$this->session->flashdata('account_updated'). '<button type="button" class="close" data-dismiss="alert">×</button></P>' ; ?>
    <?php endif; ?>

<h2>Random questions for you!</h2>
<p>Get Some Random Knowledge!</p>

<?php shuffle($questions);  foreach($questions as $question): ?>
 <div class="well col-lg-11 col-md-11 col-sm-12 col-xs-12 ">
    <div class="product-thumb transition ">
      <div class="caption">
      <?php  $q =  $question['username'] ;?>
        <h3><img class="midimage" src="<?php echo base_url()?>assets/images/avatar/<?php echo $question['user_image']; ?>"><a href="<?php echo base_url()?>y/<?php echo $question['username']; ?>"><?php echo ucfirst($question['username']); ?> </a> in <?php echo $question['subject']; ?></h3>
        <h4><?php echo word_limiter($question['question'], 25);?></h4>
                   <p class="price">
                              <span class="price-new"><a>For Grade <?php echo $question['grade']; ?></a></span>
                              <span class="price-tax"><i class="fa fa-clock-o"></i> <?php echo time_elapsed_string($question['asked_at']); ?> </span>
                              <a href="<?php echo site_url('/questions/'.$question['slug']); ?>" class="button"> Read More</a>
                  </p>
                  <hr>
              </div>


</div>
</div>

<?php endforeach; ?>




<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>
</div>
<style>
   .pagination-links{
  margin:30px 0;
}

.pagination-links strong{
  padding: 8px 13px;
  /* margin:5px; */
  color: #fff;
  background: #ff3300;
  border: 1px #ccc solid;
}

a.pagination-link{
  padding: 8px 13px;
  /* margin:5px; */
  background: #f4f4f4;
  border: 1px #ccc solid;
}
 .btn-info{
  margin-left: 15px !important;
  padding: 4px !important;
}

/* quick ask bottom  */
.fixed-bottom {
    margin: auto;
    width: 1000;
    bottom: 3;
}

@media(max-width: 1059px){
.fixed-bottom{
  width: 90%;
}
.btn-quick-ask {
  height: 35px;
}
}

.input-group > .quick-ask {
    border-top-left-radius: 45px;
    border-bottom-left-radius: 45px;
    background-color: #ff5b00;
    background: transparent;
    border: #ff5b00 2px solid;
    color: #000000;
}

.btn-quick-ask {
    padding: 0.35rem 0.6rem;
    height: 45px;
}

.input-group > .quick-ask:focus {
    background-color: #eee;
}

/* popover */

.popover-body {
    padding: 0.5rem 0.85rem;
    color: #ffffff;
}

.bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
    bottom: 1px;
    border-top-color: #ff5b00;
}

.popover-body {
    padding: 0.6rem 0.9rem;
    color: #ffffff;
}

.popover {
    max-width: 576px;
    margin: auto;
    background-color: #ff5b00;
    margin-bottom: 13px !important;
    border-radius: 0.9rem;
}

@media(max-width: 718px){
  .popover {
    max-width: 340px;
  }

  .popover-body {
     font-size: 0.6rem !important;
  }
}

.front-img{
      height: 100px;
    width: 150px;
}

.midimage{
  width: 100px;
  height: 75px;
  border-radius: 50px;
  margin-right: 10px;
}
</style>




     <main role="main" class="container">
 

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Latest Questions</h6>
  <?php  foreach($questions as $question): ?>    
        <div class="media text-muted pt-3">
          <img src="<?php echo base_url()?>assets/images/avatar/<?php echo $question['user_image']; ?>" alt="" class="mr-2 rounded smallimage">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><a href="<?php echo base_url()?>y/<?php echo $question['username']; ?>"><?php echo ucfirst($question['username']); ?></strong>
            in <?php echo $question['subject']; ?> for Grade <?php echo $question['grade']; ?> <i class="fa fa-clock-o"></i> <?php echo time_elapsed_string($question['asked_at']); ?>
          </p>
        <small class="d-block text-right mt-3">
          <a href="<?php echo site_url('/questions/'.$question['slug']); ?>">Read</a>
        </small>
        </div>
  <?php endforeach; ?> 
  <div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
  </div>   
        <small class="d-block text-right mt-3">
          <a href="#">All updates</a>
        </small>
      </div>
    </main>

                  
<!--  quick ask bottom  -->
<?php echo form_open('questions/add'); ?>
    <div class="panel-footer fixed-bottom" data-container="body" data-toggle="popover" data-placement="top" data-content="This is to ask very quick 'wh' questions if your question is long and need description use the menu above. To make others understand your question well use like 'what , why , when' words you question must be at least 10 character">
          <div class="input-group">
              <input id="btn-input" name="Questionadd" type="text" class="form-control input-sm quick-ask" placeholder="Type your Question here..." autofocus />
              <input type="hidden" name="subject" value="General-Knowledge">
              <input type="hidden" name="grade" value="General">
              <span class="input-group-btn">
                  <button class="btn btn-primary btn-sm btn-quick-ask" type="submit" name="submit" id="btn-chat">
                      ASK
                  </button>
              </span>
          </div>
      </div>
</form>    

<style>
  .smallimage{
     height: 40px;
     width: 45px;
  }
  .btn-quick-ask{
    background-color: #fff;
    border: #ff5b00 1px solid;
    color: #ff5b00;
  }

  .btn-quick-ask:hover{
    background-color: #ff5b00;
    border: #ff5b00;
    color: #fff;
  }
</style> 