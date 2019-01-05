<h2><?= $title; ?></h2>
<ul class="	list-group">	
<?php foreach($subjects as $subject) : ?>
	<li class="list-group-item"><a href="<?php echo site_url('/questions/subjects/questions/'.$subject['id']);?>"><?php echo $subject['name'];?></a></li>

<?php endforeach; ?>
</ul> 