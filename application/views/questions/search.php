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
    <h1>
        Search Results for "<a href="#">
        <?php
        echo $searchval; ?>
        </a> 
        "
        <?php $search_quantity = count($search); ?>
    </h1><p>Time Taken:- <?php echo $elapsed_search_time; ?> sec  <?php echo $search_quantity ?> results</p>
    <?php
    foreach($search as $question): ?>
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <?php
        if($search): ?>
        <div class="media text-muted pt-3">
            <img src="<?php echo base_url()?>assets/images/avatar/<?php echo $user['user_image']; ?>" alt="" class="mr-2 rounded smallimage">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">
                <a>    
                <?php
                echo ucfirst($question['author']); ?>
                </a>
                </strong>
                in 
                <?php
                echo $question['subject']; ?>
                for Grade 
                <?php
                echo $question['grade']; ?>
                <i class="fa fa-clock-o"></i>
                <?php
                echo time_elapsed_string($question['asked_at']); ?><br><b><?php echo word_limiter($question['question'], 35); ?></b>
            </p>
            <small class="d-block text-right mt-3">
                <a href="<?php echo site_url('/questions/'.$question['slug']); ?>">Read It!</a>
            </small>
        </div>
        <?php
        endif; ?>
    </div>
    <?php
    endforeach; ?>
</main>


<style>
  .smallimage{
     height: 40px;
     width: 45px;
  }
</style>



<!-- 
<?php shuffle($search);  foreach($search as $question): ?>
 <div class="well col-lg-11 col-md-11 col-sm-12 col-xs-12 ">
    <div class="product-thumb transition ">
      <div class="caption">
      <?php  $q =  $question['author'] ;?>
        <h3><a href="<?php echo base_url()?>y/<?php echo $question['author']; ?>"><?php echo ucfirst($question['author']); ?> </a> in <?php echo $question['subject']; ?></h3>
        <h4><?php echo word_limiter($question['question'], 25);?></h4>
                   <p class="price">
                              <span class="price-new"><a>For Grade <?php echo $question['grade']; ?></a></span>
                              <span class="price-tax">Asked at <?php echo ($question['asked_at']); ?> </span>
                              <a href="<?php echo site_url('/questions/'.$question['slug']); ?>" class="btn btn-info"> Read More</a>
                  </p>
                  <hr>
              </div>


</div>
</div>

<?php endforeach; ?> -->