 <!-- Modal -->
 <?php
//echo "$sub_registeredd";
//print_r($sub_registered); die("===");

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

                       <form action="">


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
                                    <input class="form-control" type="text" readonly>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Meeting Link</label>
                                    <input class="form-control" type="text" value="<?php echo $sub_registered['meeting_link']; ?>" readonly>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Assignment 1</label>
                                    <div>Assignment </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Assignment 2</label>
                                    <div>Assignment </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Assignment 3</label>
                                    <div>Assignment </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Assignment 4</label>
                                    <div>Assignment </div>
                                </div>
                                
                            </div>
                        </div>
                       </form>

                        <div class="btn btn-success"><a href="<?php echo site_url('admin/registered_user_list'); ?>">Back</a></div>
                    </div>
                </div>
            </div>
        </div>
