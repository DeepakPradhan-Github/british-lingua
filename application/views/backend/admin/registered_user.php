<?php

//print_r($registered_users); die("===");

?>


</div><section class="my-5">
    <div class="container">
        <h2>Registered Users</h2>
       <div class="table-responsive">
       <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Enrollment Date</th>
            <th scope="col">Transaction Id</th>
            <th scope="col">Student Name</th>
            <th scope="col">Course Id</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registered_users as $user): ?>
            <tr>
                <td scope="row"><?php echo $user['id']; ?></td>
                <td><?php echo $user['enrollment_date']; ?></td>
                <td>TRANX-RL-0001</td>
                <td><?php echo $user['student_name']; ?></td>
                <td><?php echo $user['course_id']; ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewModal1"
                        onclick="viewModal();"><a href="<?php echo base_url().'index.php/admin/sub_registered_user/'.$user['user_id'] ?>">View</a></button>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                        data-target="#editModal1" onclick="editModal(<?php echo $user['id']; ?>);">Edit</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


       </div>






      <!-- Modal -->
      <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog bg-white" role="document">
                <div class="modal-content">
                    <div   class="pt-4 modal-header bg-white">
                    <h3>User Details</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="closeView();">
                        <span aria-hidden="true">&times;</span>
                    </button>

                       
                        
                    </div>
                    <div class="modal-body bg-white p-4">

                       <form action="">


                       <div class="form-group py-4">
                            <div class="row">
                            <?php foreach ($sub_registered as $users):
                            if ($user['course_id'] > 0)
            continue;
        
         ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Enrollment Date</label>
                                    <input class="form-control" type="text" value="<?php echo $users['enrollment_date']; ?>" readonly>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Transaction Id</label>
                                    <input class="form-control" type="text" value="<?php echo $users['transaction_id']; ?>" readonly>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for=""> Student Name</label>
                                    <input class="form-control" type="text" value="<?php echo $users['student_name']; ?>" readonly>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Course Id</label>
                                    <input class="form-control" type="text" value="<?php echo $users['course_id']; ?>" readonly>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Teacher Id</label>
                                    <input class="form-control" type="text" value="<?php echo $users['teacher_id']; ?>" readonly>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Class Time</label>
                                    <input class="form-control" type="text" readonly>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Meeting Link</label>
                                    <input class="form-control" type="text" value="<?php echo $users['meeting_link']; ?>" readonly>
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
                                <?php endforeach; ?>
                            </div>
                        </div>
                       </form>

                        
                    </div>
                </div>
            </div>
        </div>



          <!-- Modal -->
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog bg-white" role="document">
                <div class="modal-content">
                    <div class="pt-4 modal-header bg-white">
                    <h3 >Update User Details</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="closeEdit();">
                        <span aria-hidden="true">&times;</span>
                    </button>

                        
                        <!-- style="text-align: center !important;" -->
                    </div>
                    <div class="modal-body bg-white p-4">

                       <form action="">


                       <div class="form-group py-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Enrollment Date</label>
                                    <input class="form-control" type="text" readonly>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Transaction Id</label>
                                    <input class="form-control" type="text" readonly>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for=""> Student Name</label>
                                    <input class="form-control" type="text" readonly>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Course Id</label>
                                    <input class="form-control" type="text" readonly>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Teacher Id</label>
                                    <input class="form-control" type="text" >
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Class Time</label>
                                    <input class="form-control" type="text" >
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="">Meeting Link</label>
                                    <input class="form-control" type="text" >
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Assignment 1</label>
                                    <input class="form-control" type="file" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Assignment 2</label>
                                    <input class="form-control" type="file" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Assignment 3</label>
                                    <input class="form-control" type="file" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="">Assignment 4</label>
                                    <input class="form-control" type="file" >
                                </div>
                            </div>
                        </div>
                       </form>

                       <div class="modal-footer">
                            <button type="button" class="btn btn-success">Save changes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>


        <script>
           

           function viewModal() {
               $('#viewModal').modal('show');

           }



           function editModal() {
               $('#editModal').modal('show');

           }


           function closeView() {
                $('#viewModal').modal('hide');

            }

            function closeEdit() {
                $('#editModal').modal('hide');

            }

            

           
           </script>
</section>