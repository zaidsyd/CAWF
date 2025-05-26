<?php
include 'check_session.php';
?>
<?php
    include('header.php');
    $user_id = $_GET['user_id'];
    include '../db_con.php';
    $que = "SELECT * FROM add_banner WHERE id = $user_id";
    $res = mysqli_query($con, $que);
    $row = mysqli_fetch_array($res);
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Banner</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="banner_update.php" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="hidden" name="banner_id" class="form-control" value="<?php echo htmlspecialchars($row['id']); ?>">
                                    <label>Banner Image </label>
                                    <input type="file" name='image' class="form-control file">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Banner Type</label>
                                    <select id="inputState" name="type" class="form-control">
                                        <option selected>--Select--</option>
                                        <option value="Banner" <?php echo ($row['type'] == 'Banner') ? 'selected' : ''; ?>>Banner</option>
                                        <option value="Project" <?php echo ($row['type'] == 'Project') ? 'selected' : ''; ?>>Project</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Banner Title</label>
                                    <input type="text" name='title' class="form-control"
                                        placeholder="Enter Banner Title" value="<?php echo htmlspecialchars($row['title']); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Banner Details</label>
                                    <input type="text" name="details" class="form-control" placeholder="Enter Details" value="<?php echo htmlspecialchars($row['details']); ?>">
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    .note-editable {
        height: 400px;
    }
    </style>
    <?php
    include('footer.php');
?>