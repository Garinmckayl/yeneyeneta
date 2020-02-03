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


<div class="container"><h1 class="text-center my-5"><?php echo ucfirst($title) ?></h1>

<?php shuffle($questions);  foreach($questions as $question): ?>
 <div class="well col-lg-11 col-md-11 col-sm-12 col-xs-12 ">
    <div class="product-thumb transition ">
      <div class="caption">
      <?php  $q =  $question['author'] ;?>
        <h3><a href="questions/questionbyteacher?q=<?php echo $q ?>"> <?php echo ucfirst($question['author']); ?> </a> in <?php echo $question['subject']; ?></h3>
        <h4><?php echo word_limiter($question['question'], 25);?></h4>
                   <p class="price">
                              <span class="price-new"><a>For Grade <?php echo $question['grade']; ?></a></span>
                              <span class="price-tax"><i class="fa fa-clock-o"></i> <?php echo time_elapsed_string($question['asked_at']); ?> </span>
                              <a href="<?php echo site_url('/questions/'.$question['slug']); ?>" class="btn btn-info"> Read More</a>
                  </p>
                  <hr>
              </div>


</div>
</div>

<?php endforeach; ?>

</div>