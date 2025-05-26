<?php
include 'check_session.php';
include('header.php');
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Query List</div>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Form Number</th>
                            <th>Profile</th>
                            <th>Program</th>
                            <th>Full Name</th>

                            <th>Phone</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Aadhaar</th>
                            <th>Payment Image</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('../db_con.php');
                        $fetch_query = "SELECT * FROM registration_form";
                        $result = mysqli_query($con, $fetch_query);
                        $i = 1;
                        while ($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['form_number']; ?></td>
                                <td><img src="../<?php echo $row['image_path']; ?>" alt="Image" class="img-thumbnail"
                                        style="max-width: 50px; height: auto;"></td>
                                <td><?php echo $row['program_type']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>

                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['aadhaar']; ?></td>
                                <td><img src="../<?php echo $row['qr_image']; ?>" alt="Image" class="img-thumbnail"
                                        style="max-width: 50px; height: auto;"></td>
                                <td><?php echo $row['address']; ?></td>

                                <td>
                                    <select class="statusDropdown" data-id="<?= $row['id']; ?>">
                                        <option value="" disabled selected>--Select Status--</option>
                                        <option value="Not Approved" <?= $row['status'] == 'Not Approved' ? 'selected' : '' ?>>
                                            Not Approved</option>
                                        <option value="Approved" <?= $row['status'] == 'Approved' ? 'selected' : '' ?>>Approved
                                        </option>
                                    </select>
                                </td>

                                <td>
                                    <form method="POST" action="contact_dlt.php">
                                        <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="btn btn-danger shadow btn-xs sharp" name="delete"
                                            onclick="return confirm('are you sure?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <style>
        .dataTables_length {
            display: none;
        }

        .dataTables_filter {
            display: none;
        }
    </style>
    <?php
    include('footer.php');
    ?>
<!-- SweetAlert2 & jQuery -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
$(document).ready(function () {
    $('.statusDropdown').change(function () {
        const status = $(this).val();
        const id = $(this).data('id');
        const selectElement = $(this);

        Swal.fire({
            title: 'Are you sure?',
            text: `Change status to "${status}"?`,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, update it',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'update_status.php',
                    type: 'POST',
                    data: { id: id, status: status },
                    dataType: 'json',
                    success: function (response) {
                        Swal.fire({
                            icon: response.status === 'success' ? 'success' : 'error',
                            title: response.status === 'success' ? 'Success' : 'Error',
                            html: response.message
                        });
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Server error while updating status.'
                        });
                    }
                });
            } else {
                
                location.reload();
            }
        });
    });
});
</script>
