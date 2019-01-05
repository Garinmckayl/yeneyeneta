
<main role="main" class="container">
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <?php
        echo form_open_multipart('questions/update'); ?>
        <input type="hidden" name="question_id" value="<?php echo $question['question_id'] ?>">
        <label>Update your Question <?php echo $this->session->userdata('username');?></label>
        <!--if there are validation errors  -->

    <?php if(validation_errors()): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <button class="close" data-dismiss="alert" type="button">
                <span>&times;</span>
            </button>
         <?php echo validation_errors(); ?> 
        </div>
    <?php endif; ?>

        <textarea class="form-control" type="text" name="edit_question" value="<?php echo set_value('edit_question'); ?>" placeholder="Type your Question" rows="5" required><?php echo $question['question']; ?></textarea><br>
        <div class="form-group">
            <select name="subject" class="form-control" required>
                <option value='' selected disabled>Select-Subject*</option>
                <option selected value='<?php echo $question['subject']?>'><?php echo $question['subject']?></option>
                <option value="Mathematics" <?php echo  set_select('subject', 'Mathematics'); ?>>Mathematics</option>
                <option value="physics" <?php echo  set_select('subject', 'physics'); ?>>physics</option>
                <option value="chemistry" <?php echo set_select('subject', 'chemistry'); ?>>chemistry</option>
                <option value="Biology" <?php echo  set_select('subject', 'Biology'); ?>>Biology</option>
                <option value="Astrology" <?php echo  set_select('subject', 'Astrology'); ?>>Astrology</option>
                <option value="social science" <?php echo  set_select('subject', 'social science'); ?>>social science</option>
                <option value="Art" <?php echo  set_select('subject', 'Art'); ?>>Art</option>
                <option value="Medical" <?php echo  set_select('subject', 'Medical'); ?>>Medical</option>
                <option value="Music" <?php echo  set_select('subject', 'Music'); ?>>Music</option>
                <option value="Newtrend" <?php echo  set_select('subject', 'Newtrend'); ?>>New trend</option>
                <option value="IQtest" <?php echo  set_select('subject', 'IQtest'); ?>>IQ test </option>
                <option value="philosophy and psychology" <?php echo  set_select('subject', 'philosophy and psychology'); ?>>philosophy and psychology</option>
                <option value="General Knowledge" <?php echo  set_select('subject', 'General Knowledge'); ?>>General Knowledge</option>
                <option value="Historical" <?php echo  set_select('subject', 'Historical'); ?>>Historical</option>
                <option value="Computer science" <?php echo  set_select('subject', 'Computer science'); ?>>Computer science</option>
                <option value="software Development" <?php echo  set_select('subject', 'software Development'); ?>>software Development</option>
                <option value="Career, discussion andjob" <?php echo  set_select('subject', 'Career, discussion andjob'); ?>>Career , discussion and job</option>
                <option value="Sport" <?php echo  set_select('subject', 'Sport'); ?>>Sport</option>
                <option value="other" <?php echo  set_select('subject', 'other'); ?>>other</option>
            </select><br>
            <div class="form-group">
                <select name="grade" class="form-control" required>
                    <option disabled selected value=''>Select-Grade*</option>
                    <option selected value='<?php echo $question['grade']?>'><?php echo $question['grade']?></option>
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
            <input type="submit" name="submit" value="Update question" class="btn btn-orange btn-block">
</form><script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ckeditor/question/ckeditor.js"></script>
<script>
    CKEDITOR.replace('edit_question');

     $("form").submit( function(e) {

            var messageLength = CKEDITOR.instances['editor'].getData().replace(/<[^>]*>/gi, '').length;

            if( !messageLength ) {

                alert( 'Please enter a message' );

                e.preventDefault();

            }

        });
</script>
</div>






