 <!-- Modal -->
 <?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//echo "hi";
//print_r($sub_registeredd); die("===");

?>


                       
                 <style>
                    a {
    color: white; /* Change 'black' to any color code you want */
    text-decoration: none; /* Removes underline */
}

/* Optional: Styling for hovered state */
a:hover {
    color: darkgray; /* Change to a color you prefer for the hover state */
    text-decoration: none; /* Adds underline on hover if you want */
}
                 </style>       
                  
                    <div class=" bg-white p-4">

                    <div class="btn btn-warning"><a href="<?php echo site_url('admin/registered_user_list'); ?>">Back</a></div>

                    <form action="<?php echo base_url() . 'index.php/admin/registered_user_update/' . $sub_registered['id'] ?>" method="post" enctype="multipart/form-data">
    <div class="form-group py-4">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Enrollment Date</label>
                <input class="form-control" type="text" value="<?php echo $sub_registered['enrollment_date']; ?>" readonly>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Transaction Id</label>
                <input class="form-control" type="text" value="<?php echo $sub_registered['transaction_id']; ?>" readonly>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for=""> Student Name</label>
                <input class="form-control" type="text" value="<?php echo $sub_registered['student_name']; ?>" readonly>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Course Id</label>
                <input class="form-control" type="text" value="<?php echo $sub_registered['course_id']; ?>" readonly>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Teacher Id</label>
                <input class="form-control" type="text" value="<?php echo $sub_registered['teacher_id']; ?>" readonly>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Class Time</label>
                <input class="form-control" type="time" name="clss" value="<?php echo $sub_registered['class_time']; ?>">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Teacher Name</label>
                <input class="form-control" type="text" name="teach" value="<?php echo $sub_registered['teacher_name']; ?>">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <label for="">Meeting Link</label>
                <input class="form-control" type="text" name="meet" value="<?php echo $sub_registered['meeting_link']; ?>" >
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Assignment 1</label>
                <div> </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Assignment 2</label>
                <div> </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Assignment 3</label>
                <div> </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="">Assignment 4</label>
                <input type="file" name="userfile" id="file">
            </div>
        </div>
        <button class="btn btn-success mt-2" type="submit" name="submit">Update</button>
    </div>
</form>

                       
                    </div>
                </div>
            </div>
        </div>
