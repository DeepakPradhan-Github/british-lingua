<?php

//print_r($registered_users); die("===");

?>

<style>
    a {
        color: white;
        /* Change 'black' to any color code you want */
        text-decoration: none;
        /* Removes underline */
    }

    /* Optional: Styling for hovered state */
    a:hover {
        color: darkgray;
        /* Change to a color you prefer for the hover state */
        text-decoration: none;
        /* Adds underline on hover if you want */
    }
</style>
</div>
<section class="my-5">
    <div class="container">
        <h2>Registered Users</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">User Id</th>
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
                            <td scope="row"><?php echo $user['user_id']; ?></td>
                            <td><?php echo $user['enrollment_date']; ?></td>
                            <td><?php echo $user['transaction_id']; ?></td>
                            <td><?php echo $user['student_name']; ?></td>
                            <td><?php echo $user['course_id']; ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info" onclick=""><a
                                        href="<?php echo base_url() . 'index.php/admin/sub_registered_user/' . $user['id'] ?>">View</a></button>
                                <button type="button" class="btn btn-sm btn-success" onclick=""><a
                                        href="<?php echo base_url() . 'index.php/admin/sub_registered_edit/' . $user['id'] ?>">Edit</a></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>








        <script>


            //    function viewModal() {
            //        $('#viewModal').modal('show');

            //    }



            //    function editModal() {
            //        $('#editModal').modal('show');

            //    }


            //    function closeView() {
            //         $('#viewModal').modal('hide');

            //     }

            //     function closeEdit() {
            //         $('#editModal').modal('hide');

            //     }




        </script>
</section>