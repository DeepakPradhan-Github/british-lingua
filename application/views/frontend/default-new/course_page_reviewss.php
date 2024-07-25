<?php

//echo $course_trans->Teacher;
// //print_r($course_trans);
//  die("===");



?>

<?php
// Assuming $course_trans is an object and Teacher is a property
if ($course_trans->approve == 0) {
    echo "Please Contact Admin For Class Details - admin123@gmail.com";
} else {
    ?>
<div class="course-description">
    <h5 class="description-head"><?php echo get_phrase('Teacher') ?></h5>
    <?php echo $course_trans->Teacher; ?>
</div>

<div class="course-description">
    <h5 class="description-head"><?php echo get_phrase('Class URL') ?></h5>
    <?php echo $course_trans->class_url; ?>
</div>

<div class="course-description">
    <h5 class="description-head"><?php echo get_phrase('Enroll Date') ?></h5>
    <?php echo $course_trans->enrollment_date; ?>
</div>

<section class="d-flex flex-column">
  <h3 class="description-head"><?php echo get_phrase('Assignments') ?></h3>

 <!-- File 1 -->
  <div>
  <label for="fileInput1">File 1</label>
<img src="<?php echo base_url() . '/uploads/reg_img/' . $course_trans->file_img; ?>" alt="File1" style="height:6em; width:6em; margin:10%; " onerror="this.onerror=null; this.src='<?php echo base_url() . '/uploads/addons/download_file.png' ?>';">
<input type="hidden" id="fileUrl1" value="<?php echo base_url() . '/uploads/reg_img/' . $course_trans->file_img; ?>">
<button id="downloadButton1" class="btn btn-success">Download File</button>
  </div>


<!-- File 2 -->
 <div>
 <label for="fileInput2">File 2</label>
<img src="<?php echo base_url() . '/uploads/reg_img/' . $course_trans->file_img2; ?>" alt="File2" style="height:6em; width:6em; margin:10%;" onerror="this.onerror=null; this.src='<?php echo base_url() . '/uploads/addons/download_file.png' ?>';">
<input type="hidden" id="fileUrl2" value="<?php echo base_url() . '/uploads/reg_img/' . $course_trans->file_img2; ?>">
<button id="downloadButton2" class="btn btn-success">Download File</button>
 </div>


<!-- File 3 -->
 <div>
 <label for="fileInput3">File 3</label>
<img src="<?php echo base_url() . '/uploads/reg_img/' . $course_trans->file_img3; ?>" alt="File3" style="height:6em; width:6em; margin:10%;" onerror="this.onerror=null; this.src='<?php echo base_url() . '/uploads/addons/download_file.png' ?>';">
<input type="hidden" id="fileUrl3" value="<?php echo base_url() . '/uploads/reg_img/' . $course_trans->file_img3; ?>">
<button id="downloadButton3" class="btn btn-success">Download File</button>
 </div>


<!-- File 4 -->
 <div>
 <label for="fileInput4">File 4</label>
<img src="<?php echo base_url() . '/uploads/reg_img/' . $course_trans->file_img4; ?>" alt="File4" style="height:6em; width:6em; margin:10%;" onerror="this.onerror=null; this.src='<?php echo base_url() . '/uploads/addons/download_file.png' ?>';">
<input type="hidden" id="fileUrl4" value="<?php echo base_url() . '/uploads/reg_img/' . $course_trans->file_img4; ?>">
<button id="downloadButton4" class="btn btn-success">Download File</button>
 </div>




</section>

<?php
}
?>

<!--<div class="course-description">-->
<!--    <h3 class="description-head"><?php echo get_phrase('What will i learn?') ?></h3>-->
<!--    <ul class="step-down">-->
<!--        <?php foreach (json_decode($course_details['outcomes']) as $outcome) : ?>-->
<!--            <?php if ($outcome != "") : ?>-->
<!--                <li><?php echo $outcome; ?></li>-->
<!--            <?php endif; ?>-->
<!--        <?php endforeach; ?>-->
<!--    </ul>-->
<!--</div>-->

<!--<div class="course-description requirements">-->
<!--    <h3 class="description-head"><?php echo get_phrase('Requirements') ?></h3>-->
<!--    <ul>-->
<!--        <?php foreach (json_decode($course_details['requirements']) as $requirement) : ?>-->
<!--            <?php if ($requirement != "") : ?>-->
<!--                <li><?php echo $requirement; ?></li>-->
<!--            <?php endif; ?>-->
<!--        <?php endforeach; ?>-->
<!--    </ul>-->
<!--</div>-->

<!-- <?php //$faqs = json_decode($course_details['faqs'], true);
    //$counter = 0;
  //if(is_array($faqs) && count($faqs) > 0): ?>
    <div class="course-description">
        <h3 class="description-head"><?php echo get_phrase('Assignments') ?></h3>

        <div class="faq-accrodion m-0">
           
        </div>
    </div>
<?php //endif; ?> -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const buttons = document.querySelectorAll('[id^=downloadButton]');

  buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      const fileUrlId = button.id.replace('downloadButton', 'fileUrl');
      const fileUrl = document.getElementById(fileUrlId).value;

      if (fileUrl) {
        var a = document.createElement('a');
        a.href = fileUrl;
        a.download = '';  // Optionally set a download filename here
        a.style.display = 'none';  // Hide the link

        document.body.appendChild(a);  // Append the link to the document
        a.click();  // Simulate a click to trigger the download
        document.body.removeChild(a);  // Remove the link from the document
      } else {
        alert('No file URL available for download.');
      }
    });
  });
});
</script>

