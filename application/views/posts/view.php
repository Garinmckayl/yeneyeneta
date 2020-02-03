<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom"></h3>
            <div class="blog-post">
                <h2 class="blog-post-title section-heading">
                <?php
                echo $post['title']; ?>
                </h2>
                <p class="blog-post-meta">
                    <?php
                    echo $post['created_at']; ?>
                    by <span class="text-success">
                    <?php
                    echo $post['usertitle'] ?>
                    <?php
                    echo $post['username'] ?>
                    </span>
                </p>
                <p>
                <?php
                echo $post['body']; ?>
                </p>
                <hr>
                <a href="#">
                    <img class="img-fluid" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
                </a>
                <?php
                if($this->session->userdata('user_id') == $post['user_id']): ?>
                <hr>
                <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
                <?php
                echo form_open('/posts/delete/'.$post['id']); ?>
                <input type="submit" value="Delete" class="btn btn-danger">
</form>
<?php
endif; ?>
</div>
<div class="card">
    <div class="card-header" role="tab" id="heading">
        <h5 class="mb-0">
            <a href="#addcomment" data-parent="#accordion" data-toggle="collapse">Give comment
          </a>
        </h5>
    </div>
    <div id="addcomment" class="collapse">
        <div class="card-body">
            <h3>Add Comment</h3>
            <?php
            echo validation_errors(); ?>
            <?php
            echo form_open('Posts/createComment/'.$post['id']); ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="comment" class="form-control" required></textarea>
            </div>
            <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
            <button class="btn btn-primary" type="submit">Submit</button>
</form></div></div></div>
<div class="card">
    <div class="card-header" role="tab" id="heading">
        <h5 class="mb-0">
            <a href="#readcomment" data-parent="#accordion" data-toggle="collapse">Comments
          </a>
        </h5>
    </div>
    <div id="readcomment" class="collapse">
        <div class="card-body">
            <?php
            if($comments) : ?>
            <?php
            foreach($comments as $comment) : ?>
            <div class="well">
                <h5>
                    <?php
                    echo $comment['body']; ?>
                    [by <strong>
                    <?php
                    echo $comment['name']; ?>
                    </strong>
                    ]
                </h5>
            </div>
            <?php
            endforeach; ?>
            <?php
            else : ?>
            <p>No Comments To Display</p>
            <?php
            endif; ?>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header" role="tab" id="heading">
        <h5 class="mb-0">
            <a href="#contactwriter" data-parent="#accordion" data-toggle="collapse">Contact the writer
          </a>
        </h5>
    </div>
    <div id="contactwriter" class="collapse">
        <div class="card-body"></div>
    </div>
</div>
</div>
<!--  /.blog-main -->
<aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">
            About <span class="text-success">
            <?php
            echo $post['usertitle'] ?>
            <?php
            echo $post['username'] ?>
            </span>
        </h4>
        <p class="mb-0">
            User Title:-<em>
            <?php
            echo $post['usertitle'] ?>
            </em>
            <br>
            User Name:- <em>
            <?php
            echo $post['username'] ?>
            </em>
            <br>
            Email:- <em>
            <?php
            echo $post['email'] ?>
            </em>
            <br>
            School:- <em>
            <?php
            echo $post['school']?>
            </em>
            .
        </p>
    </div>
    <div class="p-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            <?php
            foreach($categories as $category): ?>
            <li>
                <a href="#">
                <?php
                echo $category['name']; ?>
                </a>
            </li>
            <?php
            endforeach; ?>
        </ol>
    </div>
</aside>
<!-- /.blog-sidebar  -->
</div>
<!-- /.row  -->
</main>
<!-- /.container -->
