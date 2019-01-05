<main role="main" class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-orange rounded box-shadow">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">
            <?php
            echo $this->session->userdata('username'); ?> here are some technics to help other understand your questions well.
            </h6>
            <small>1, Try to describe it well , use 'wh' words like 'what', 'when', 'where'.</small><br>
            <small>2, check your spelling.</small><br>
            <small>3, use d/t approches.</small>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <?php
        echo form_open_multipart('questions/add'); ?>
        <label>Add Question <?php echo $this->session->userdata('username');?></label> <a data-container="body" data-toggle="popover" data-placement="top" data-content="To make others understand your question try to make it neat and describe it well."><span><i class="fa fa-question-circle"></i></span></a><br> 
        <p class="d-block text-gray-dark text-info">This page lets you add very deep questions and questions that need explanation</p>
        <!--if there are validation errors  -->

    <?php if(validation_errors()): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <button class="close" data-dismiss="alert" type="button">
                <span>&times;</span>
            </button>
         <?php echo validation_errors(); ?> 
        </div>
    <?php endif; ?>

        <textarea class="form-control" type="text" name="Questionadd" value="<?php echo set_value('Questionadd'); ?>" placeholder="Type your Question" rows="5" data-container="body" required></textarea><br>
        <div class="form-group">
            <select name="subject" class="form-control" required>
                <option value='' selected disabled>Select-Subject*</option>
                <option value="Mathematics" <?php echo  set_select('subject', 'Mathematics'); ?>>Mathematics</option>
                <option value="physics" <?php echo  set_select('subject', 'physics'); ?>>physics</option>
                <option value="chemistry" <?php echo  set_select('subject', 'chemistry'); ?>>chemistry</option>
                <option value="Biology" <?php echo  set_select('subject', 'Biology'); ?>>Biology</option>
                <option value="Astrology" <?php echo  set_select('subject', 'Astrology'); ?>>Astrology</option>
                <option value="social-science" <?php echo  set_select('subject', 'social-science'); ?>>social science</option>
                <option value="Art" <?php echo  set_select('subject', 'Art'); ?>>Art</option>
                <option value="Medical" <?php echo  set_select('subject', 'Medical'); ?>>Medical</option>
                <option value="Music" <?php echo  set_select('subject', 'Music'); ?>>Music</option>
                <option value="New-trend" <?php echo  set_select('subject', 'New-trend'); ?>>New trend</option>
                <option value="IQ-test" <?php echo  set_select('subject', 'IQ-test'); ?>>IQ test </option>
                <option value="philosophy-and-psychology" <?php echo  set_select('subject', 'philosophy-and-psychology'); ?>>philosophy and psychology</option>
                <option value="General-Knowledge" <?php echo  set_select('subject', 'General-Knowledge'); ?>>General Knowledge</option>
                <option value="Historical" <?php echo  set_select('subject', 'Historical'); ?>>Historical</option>
                <option value="Computer-science" <?php echo  set_select('subject', 'Computer-science'); ?>>Computer science</option>
                <option value="software-Development" <?php echo  set_select('subject', 'software-Development'); ?>>software Development</option>
                <option value="Career-discussion-and-job" <?php echo  set_select('subject', 'Career-discussion-and-job'); ?>>Career , discussion and job</option>
                <option value="Sport" <?php echo  set_select('subject', 'Sport'); ?>>Sport</option>
                <option value="other" <?php echo  set_select('subject', 'other'); ?>>other</option>
            </select><br>
            <div class="form-group">
                <select name="grade" class="form-control" required>
                    <option disabled selected value=''>Select-Grade*</option>
                    <option value="1" <?php echo  set_select('grade', '1'); ?>>1</option>
                    <option value="2" <?php echo  set_select('grade', '2'); ?>>2</option>
                    <option value="3" <?php echo  set_select('grade', '3'); ?>>3</option>
                    <option value="4" <?php echo  set_select('grade', '4'); ?>>4</option>
                    <option value="5" <?php echo  set_select('grade', '5'); ?>>5</option>
                    <option value="6" <?php echo  set_select('grade', '6'); ?>>6</option>
                    <option value="7" <?php echo  set_select('grade', '7'); ?>>7</option>
                    <option value="8" <?php echo  set_select('grade', '8'); ?>>8</option>
                    <option value="9" <?php echo  set_select('grade', '9'); ?>>9</option>
                    <option value="10" <?php echo  set_select('grade', '10'); ?>>10</option>
                    <option value="11" <?php echo  set_select('grade', '11'); ?>>11</option>
                    <option value="12" <?php echo  set_select('grade', '12'); ?>>12</option>
                    <option value="collage" <?php echo  set_select('grade', 'collage'); ?>>collage</option>
                    <option value="Beyond " <?php echo  set_select('grade', 'Beyond'); ?>>Beyond </option>
                    <option value="General " <?php echo  set_select('grade', 'General'); ?>>General </option>
                </select>
            </div>
            <div class="form-group"></div>
            <input type="submit" name="submit" value="Add" class="btn btn-orange btn-block">
</form><script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ckeditor/question/add/ckeditor.js"></script>

</div>
<script>
    CKEDITOR.replace('Questionadd');
</script>
