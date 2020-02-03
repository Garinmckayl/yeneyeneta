<style>
	.editaccount{
	   box-shadow: 0 1.25rem 2.75rem rgba(0, 0, 0, 0.52);
	}
	main .container{
		position: absolute;
	}

	 .settingprofileimg{
		position: relative;
		width: 200px;
		height: 200px;
		right: -350px;
	    top: -10;
	    border: 2px #ff5b00  solid;
	}
	@media(max-width: 991px){
		.settingprofileimg{
			width: 120px;
			height: 120px;
			left: 50px;
		}
	}


@media(max-width: 987px){
  .button{
  	margin-left: 50px;
  }
}
.show-for-sr, .show-on-focus {
    position: absolute !important;
    width: 1px;
    height: 1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
}
.border-orange{
	border: 2px solid #ff5b00;
}
</style>
 
<main role="main" class="container">
    <div class="card mb-3 col-md-9 mx-auto mt-10 editaccount" style="margin-top: 20px;">
    
        <div class="card border-orange mb-3">
          <div class="card-header"><?php echo $user['usertitle']; ?> <?php echo $user['username']; ?></div>
          <div class="card-body">
            <h4 class="card-title"><?php echo $user['userstatus']; ?> at <?php echo $user['school']; ?></h4>
            <p class="card-text">Email:- <?php echo $user['email']; ?></p>
          </div>
        </div>

                    <div class="modal-header">
                        <h4 class="modal-title" id="contactmodaltitle">
                            account Setting <br><small>Just change and hit save to see the result</small>
                        </h4> 
                    </div>
                    <div class="modal-body">
                    <?php if(validation_errors()): ?>	
                       <?php echo validation_errors() ?>
                    <?php endif; ?>    
                        <?php
                        echo form_open_multipart('users/update'); ?>
                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                         <div class="form-group">
                            <label>Your Profile pic</label>
                            <img class="img-fluid img-profile rounded-circle settingprofileimg img-right" src="<?php echo base_url()?>assets/images/avatar/<?php echo $user['user_image']; ?>" alt="">
                            <label for="fileUpload" class="button">Change Image</label>
                            <input type="file" name="user_image" id="fileUpload" maxlength="32" class="form-control show-for-sr" placeholder="Change your profile pic*">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="examname">First name</label>
                                <input type="text" class="form-control" name="firstname" id="examname" placeholder="" value="<?php echo $user['firstname']; ?>" required>
                                <div class="invalid-feedback">Valid First name is required.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="examsubject">Last name</label>
                                <input type="text" class="form-control" name="lastname" id="examsubject" placeholder="" value="<?php echo $user['lastname']; ?>" required>
                                <div class="invalid-feedback">Valid Last name is required.</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Your Title</label>
                            <select name="user_title" class="form-control" required>
                                <option selected><?php echo $user['usertitle']; ?></option>
                                <option value=" ">None</option>
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
                            <label>Your Gender</label>
                            <select name="user_gender" class="form-control" required>
                                <option selected disabled>Gender</option>
                                <option selected><?php echo $user['gender']; ?></option>
                                <option value="male" <?php echo set_select('user_gender', 'male'); ?>>male</option>
                                <option value="female" <?php echo set_select('user_gender', 'female'); ?>>female</option>
                            </select>
                        </div>
                        <div class="form-group">
                              <label>Add Bio</label>
                            <textarea class="form-control" rows="5" name="bio" placeholder="your education , your life ..."><?php echo $user['bio']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Your school</label>
                            <select name="school" id="input-status" class="form-control" required>
                                  <option value="yehemdar-school" <?php echo set_select('school', 'yehemdar-school'); ?>>Yehemdar Family School</option>
                            </select>
                        </div>

                     <div class="form-group">
                        <label>Your Grade</label>
                        <select name="grade" id="input-status" class="form-control" required>
                            <option selected><?php echo $user['grade']; ?></option>
                              <option value="1" <?php echo set_select('grade', '1'); ?>>Grade 1</option>
                              <option value="2" <?php echo set_select('grade', '2'); ?>>Grade 2</option>
                              <option value="3" <?php echo set_select('grade', '3'); ?>>Grade 3</option>
                              <option value="4" <?php echo set_select('grade', '4'); ?>>Grade 4</option>
                              <option value="5" <?php echo set_select('grade', '5'); ?>>Grade 1</option>
                              <option value="6" <?php echo set_select('grade', '6'); ?>>Grade 1</option>
                              <option value="7" <?php echo set_select('grade', '7'); ?>>Grade 7</option>
                              <option value="8" <?php echo set_select('grade', '8'); ?>>Grade 8</option>
                              <option value="9" <?php echo set_select('grade', '9'); ?>>Grade 9</option>
                              <option value="10" <?php echo set_select('grade', '10'); ?>>Grade 10</option>
                              <option value="11" <?php echo set_select('grade', '11'); ?>>Grade 11</option>
                              <option value="12" <?php echo set_select('grade', '12'); ?>>Grade 12</option>
                              <option value="universty-first-year" <?php echo set_select('grade', 'universty-first-year'); ?>>universty first year</option>
                              <option value="universty-second-year" <?php echo set_select('grade', 'universty-second-year'); ?>>universty second year</option>
                              <option value="universty-third-year" <?php echo set_select('grade', 'universty-third-year'); ?>>universty third year</option>
                              <option value="universty-fourth-year" <?php echo set_select('grade', 'universty-fourth-year'); ?>>universty fourth year</option>
                              <option value="universty-fifth-year" <?php echo set_select('grade', 'universty-fifth-year'); ?>>universty fifth year</option>
                              <option value="universty-sixth-year" <?php echo set_select('grade', 'universty-sixth-year'); ?>>universty sixth year</option>
                        </select>
                    </div>

                        <input type="submit" name="save" value="Save" class="btn btn-orange btn-lg btn-block">
                        <div class="form-group"></div>
                    </div>
                    <?php
                    echo form_close(); ?>
        </div>
    </main>

