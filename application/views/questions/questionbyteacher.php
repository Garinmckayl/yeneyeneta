<?php if($author): ?>
<h1>Questions by <?php echo $author ?> "<a href="#"><?php echo '' ?></a></h1>
      <?php  foreach($author as $questionauthorauthor): ?>
      <div class="well col-lg-11 col-md-11 col-sm-12 col-xs-12 ">
          <div class="product-thumb transition">
            <div class="caption">
              <h3><a href="#">By <?php echo ucfirst($questionauthor['author']); ?> </a> in <?php echo $questionauthor['subject']; ?></h3>
              <h4><?php echo word_limiter($questionauthor['questionauthor'], 25);?></h4>
                        <p class="price">
                                    <span class="price-new"><a>For Grade <?php echo $questionauthor['grade']; ?></a></span>
                                    <span class="price-tax">Asked at <?php echo $questionauthor['asked_at']; ?>  <a href="<?php echo site_url('/questionauthors/'.$questionauthor['slug']); ?>" class="btn btn-success"> Read More</a></span>
                        </p>
                        <hr>
                  </div>
           </div>
      </div>
      <?php endforeach; ?>
<?php else: ?>
<hr>
 <h2 class="text-center text-danger">No results found for <a href="#">"<?php echo $searchval ?>"</a></h2>
<?php endif; ?>
