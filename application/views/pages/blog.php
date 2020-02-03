<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark front">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">A blog for teachers and students and for anybody who loves withdom. </h1>
        <p class="lead my-3">
            To get started you don't need an account but to be more interactive you can create an account and login! enjoy being yeneta:)  <img class="footerimg" src="<?php echo site_url();?>assets/img/24.png">&trade;
        </p>
    </div>
</div>
<div class="row mb-2">
    <?php
    foreach($posts as $post) : ?>
    <div class="col-md-6 main-show">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">
                <?php
                echo $post['name']; ?>
                </strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="<?php echo site_url('/posts/'.$post['slug']); ?>">
                    <?php
                    echo $post['title']; ?>
                    </a>
                </h3>
                <div class="mb-1 text-muted">
                <?php
                echo $post['created_at']; ?>
                </div>
                <p class="card-text mb-auto">
                <?php
                echo word_limiter($post['body'], 18); ?>
                .</p>
                <a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="Card image cap">
        </div>
    </div>
    <!--       <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                          <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">
                              <a class="text-dark" href="#">Post title</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                          </div>
                          <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                        </div>
                      </div> -->
    <?php
    endforeach; ?>
    <!--row  -->
</div>
<!--container -->
</div><div class="pagination-links blog-pagination">
<?php
echo $this->pagination->create_links(); ?>
</div>
<!--     <main role="main" class="container">
              <div class="row">
                <div class="col-md-8 blog-main">
                  <h3 class="pb-3 mb-4 font-italic border-bottom">
                    From the Firehose
                  </h3>

                  <div class="blog-post">
                    <h2 class="blog-post-title">Sample blog post</h2>
                    <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                    <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                    <hr>
                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                      <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <h2>Heading</h2>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <pre><code>Example code block</code></pre>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <ul>
                      <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                      <li>Donec id elit non mi porta gravida at eget metus.</li>
                      <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                    <ol>
                      <li>Vestibulum id ligula porta felis euismod semper.</li>
                      <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                      <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                    </ol>
                    <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                  </div><!-- /.blog-post -->
<!--     <div class="blog-post">
                    <h2 class="blog-post-title">Another blog post</h2>
                    <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                      <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  </div><!-- /.blog-post -->
<!--     <div class="blog-post">
                    <h2 class="blog-post-title">New feature</h2>
                    <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <ul>
                      <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                      <li>Donec id elit non mi porta gravida at eget metus.</li>
                      <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                  </div><!-- /.blog-post -->
<!--       <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                  </nav>

                </div><!-- /.blog-main -->
<!--    <aside class="col-md-4 blog-sidebar">
                  <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                  </div>

                  <div class="p-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                      <li><a href="#">March 2014</a></li>
                      <li><a href="#">February 2014</a></li>
                      <li><a href="#">January 2014</a></li>
                      <li><a href="#">December 2013</a></li>
                      <li><a href="#">November 2013</a></li>
                      <li><a href="#">October 2013</a></li>
                      <li><a href="#">September 2013</a></li>
                      <li><a href="#">August 2013</a></li>
                      <li><a href="#">July 2013</a></li>
                      <li><a href="#">June 2013</a></li>
                      <li><a href="#">May 2013</a></li>
                      <li><a href="#">April 2013</a></li>
                    </ol>
                  </div>

                  <div class="p-3">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                      <li><a href="#">GitHub</a></li>
                      <li><a href="#">Twitter</a></li>
                      <li><a href="#">Facebook</a></li>
                    </ol>
                  </div>
                </aside><!-- /.blog-sidebar -->
</div>
<!-- /.row -->
</main>
<!-- /.container -->
<style>
    /* stylelint-disable selector-list-comma-newline-after */
    .blog-header {
        line-height: 1;
        border-bottom: 1px solid #e5e5e5;
    }

    .blog-header-logo {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
        font-size: 2.25rem;
    }

    .blog-header-logo:hover {
        text-decoration: none;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    }

    .display-4 {
        font-size: 2.5rem;
    }

    @media (min-width: 768px) {
        .display-4 {
            font-size: 3rem;
        }
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .nav-scroller .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
    }

    .card-img-right {
        height: 100%;
        border-radius: 0 3px 3px 0;
    }

    .flex-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    }

    .h-250 {
        height: 250px;
    }

    @media (min-width: 768px) {
        .h-md-250 {
            height: 250px;
        }
    }

    .border-top {
        border-top: 1px solid #e5e5e5;
    }

    .border-bottom {
        border-bottom: 1px solid #e5e5e5;
    }

    .box-shadow {
        box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
    }

    /*
 * Blog name and description
 */
    .blog-title {
        margin-bottom: 0;
        font-size: 2rem;
        font-weight: 400;
    }

    .blog-description {
        font-size: 1.1rem;
        color: #999;
    }

    @media (min-width: 40em) {
        .blog-title {
            font-size: 3.5rem;
        }
    }

    /* Pagination */
    .blog-pagination {
        margin-bottom: 4rem;
    }

    .blog-pagination > .btn {
        border-radius: 2rem;
    }

    /*
 * Blog posts
 */
    .blog-post {
        margin-bottom: 4rem;
    }

    .blog-post-title {
        margin-bottom: .25rem;
        font-size: 2.5rem;
    }

    .blog-post-meta {
        margin-bottom: 1.25rem;
        color: #999;
    }

    /*
 * Footer
 */
    .blog-footer {
        padding: 2.5rem 0;
        color: #999;
        text-align: center;
        background-color: #f9f9f9;
        border-top: .05rem solid #e5e5e5;
    }

    .blog-footer p:last-child {
        margin-bottom: 0;
    }

    .front {
        background-image: url(2.jpeg);
        z-index: 1000;
    }

    .main-show img {
        height: 200px;
        width: 250px;
    }
</style>
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
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                            <input type="hidden" name="page" value="blog">
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
                <h5 class="modal-title" id="contactmodaltitle">
                    <span class="brand">YENE YENETA</span>
                    Login
        
                </h5>
                <button type="button" class="close" data-dismiss="modal">�</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-11 col-sm-12">
                        <?php
                        echo validation_errors() ?>
                        <?php
                        if($this->session->flashdata('user_registered')): ?>
                        <?php
                        echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered'). '</P>' ; ?>
                        <?php
                        endif; ?>
                        <?php
                        echo form_open('users/register'); ?>
                        <div class="form-group">
                            <input type="text" name="username" maxlength="32" class="form-control" placeholder="User Name*" required>
                        </div>
                        <div class="form-group">
                            <select name="title" class="form-control" required>
                                <option selected disabled>Title</option>
                                <option value="None">None</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Miss.">Miss.</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Prof.">Prof.</option>
                                <option value="Rev .">Rev .</option>
                                <option value="Rev . Fr">Rev . Fr .</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="school" id="input-status" class="form-control" required>
                                <option selected="selected" value="" disabled>School*</option>
                                <option value="none">none</option>
                                <option value="i am not student">I am not student</option>
                                <option value="Abema Elementary & Junior Secondary Schoo">Abema Elementary &Junior Secondary School</option>
                                <option value="Abiot Kirs secondary School">Abiot Kirs secondary School</option>
                                <option value="Addis Ketema Secondary School">Addis Ketema Secondary School</option>
                                <option value="Adama No 3 Primary and Junior
                 Secondary School
                 ">Adama No 3 Primary and Junior
                 Secondary School
                </option>
                                <option value="Adama Secondary School">Adama Secondary School</option>
                                <option value="Agazi Comprehensive High School">Agazi Comprehensive High School</option>
                                <option value="Andinet International School">Andinet International School</option>
                                <option value="Alpha Keraneyio School">Alpha Keraneyio School</option>
                                <option value="Arsema Youth Academy">Arsema Youth Academy</option>
                                <option value="Assay School">Assay School</option>
                                <option value="Ayer Tena Secondary school">Ayer Tena Secondary school</option>
                                <option value="Awolia Muslim Mission shool">Awolia Muslim Mission shool</option>
                                <option value="Asela Preparatory School
                ">Asela Preparatory School
                </option>
                                <option value="BeteSeb Academy">BeteSeb Academy</option>
                                <option value="Bethel Mekane Yesus school">Bethel Mekane Yesus school</option>
                                <option value="Bingham Academy">Bingham Academy</option>
                                <option value="British International school">British International school</option>
                                <option value="Bole senior Secondary and Preparatory School">Bole senior Secondary and Preparatory School</option>
                                <option value="Bright Future School">Bright Future School</option>
                                <option value="Cistercian Monastery">Cistercian Monastery</option>
                                <option value="Chilalo Terara Secondary School
                ">Chilalo Terara Secondary School
                </option>
                                <option value="Cordova Academy">Cordova Academy</option>
                                <option value="CyberWorld Institute of Computer">CyberWorld Institute of Computer</option>
                                <option value="Debre Markos Senior Secondary Comprehensive School">Debre Markos Senior Secondary Comprehensive School</option>
                                <option value="Didea Secondary and Preparatory School">Didea Secondary and Preparatory School</option>
                                <option value="Dilchibo Junior & Secondary School">Dilchibo Junior &Secondary School</option>
                                <option value="El-Bethel academy">El-Bethel academy</option>
                                <option value="English Alive Academy">English Alive Academy</option>
                                <option value="Ethioparents school">Ethioparents school</option>
                                <option value="Future Talent international Academy">Future Talent international Academy</option>
                                <option value="Fountain of Knowledge School">Fountain of Knowledge School</option>
                                <option value="Gibson school systems">Gibson school systems</option>
                                <option value="Ghion Secondary and Preparatory School">Ghion Secondary and Preparatory School</option>
                                <option value="Hawas Preparatory School">Hawas Preparatory School</option>
                                <option value="Hibret Fire">Hibret Fire</option>
                                <option value="international Community school of A.A">international Community school of A.A</option>
                                <option value="Istituto statale italiano di A.A">Istituto statale italiano di A.A</option>
                                <option value="Kidame Gebeya High School">Kidame Gebeya High School</option>
                                <option value="Kids New Flower">Kids New Flower</option>
                                <option value="LionHeart Academy">LionHeart Academy</option>
                                <option value="Lideta Catholic Cathedral school">Lideta Catholic Cathedral school</option>
                                <option value="School of Indiana">School of Indiana</option>
                                <option value="Lyc�e Guebre-Mariam">Lyc�e Guebre-Mariam</option>
                                <option value="Menelik II School">Menelik II School</option>
                                <option value="Memhir Akalewold Secondary Preparatory School">Memhir Akalewold Secondary Preparatory School</option>
                                <option value="Millennium Secondary & preparatory school">Millennium Secondary &preparatory school</option>
                                <option value="Memehere Akale Wolde Preparatory School">Memehere Akale Wolde Preparatory School</option>
                                <option value="Medhanialem Secondary and Preparatory School">Medhanialem Secondary and Preparatory School</option>
                                <option value="Menkorer secondary school Ethio-Japan secondary school">Menkorer secondary school Ethio-Japan secondary school</option>
                                <option value="Nejashi Ethio-Turkish International Schools">Nejashi Ethio-Turkish International
                Schools</option>
                                <option value="Nazareth School">Nazareth School</option>
                                <option value="Nigus Tekle Haymanot Elementary & Junior Secondary School
                ">Nigus Tekle Haymanot Elementary &Junior Secondary School</option>
                                <option value="One Planet International School">One Planet International School</option>
                                <option value="Queen Sheba High School School">Queen Sheba High School</option>
                                <option value="Russian Embassy School in Addis Ababa">Russian Embassy School in Addis  Ababa</option>
                                <option value="Sandford International School">Sandford International School</option>
                                <option value="Sedika Secondary School">Sedika Secondary School</option>
                                <option value="School of Tomorrow">School of Tomorrow</option>
                                <option value="South-West Academy">South-West Academy</option>
                                <option value="Sophists Academy">Sophists Academy</option>
                                <option value="Shirka Secondary and Preparatory School">Shirka Secondary and Preparatory School</option>
                                <option value="Tikur Anbessa High School
                  ">Tikur Anbessa High School
                </option>
                                <option value="Teyema Primary School">Teyema Primary School</option>
                                <option value="Tossa Primary School">Tossa Primary School</option>
                                <option value="St. Mary's Catholic School
                ">St. Mary's Catholic School+
                </option>
                                <option value="Zoskales Academy">Zoskales Academy</option>
                                <option value="St. Joseph Schoo">St. Joseph Schoo</option>
                                <option value="Yehemdar Academy">Yehemdar Academy</option>
                                <option value="Zagol Academy">Zagol Academy</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" maxlength="64" class="form-control" placeholder="User Email*" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="User Pasword*" required>
                        </div>
                        <input type="hidden" name="page" value="blog">
                        <input type="submit" name="register" value="Register" class="btn btn-outline-light btn-block">
                        <div class="form-group">
                            <p>by clicking register button you agree to our 
                        </div>
                        <a href="#" title="privecy policy" data-toggle="modal" data-target="#contactmodal">privecy policy</a>
</p></div></div>
<?php
echo form_close(); ?>
</div></div></div></div></div></div>
<div class="modal fade text-dark modal-dismissible" id="postmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactmodaltitle">
                    <span class="brand">YENE YENETA</span>
                    create a post
        
                </h5>
                <button type="button" class="close" data-dismiss="modal">�</button>
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
                        echo form_open_multipart('posts/create'); ?>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Add Title" required>
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea id="" class="form-control" name="body" placeholder="Add Body" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                <?php
                                foreach($categories as $category): ?>
                                <option value="<?php echo $category['id']; ?>" required>
                                <?php
                                echo $category['name']; ?>
                                </option>
                                <?php
                                endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="image" size="20">
                        </div>
                        <button type="button" class="close btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                        <?php
                        echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
