<?php
// Indian Time Zone Set
date_default_timezone_set('Asia/Kolkata');

// Include database connection
include('../db_con.php');

if (isset($_POST['submit'])) {
    $con->begin_transaction();
    try {
        // Retrieve form data
        $blog_url = str_replace(' ', '-', $_POST['blog_url']);
        $blog_heading = $_POST['blog_heading'];
        $blog_desc_first = $_POST['blog_desc_first'];
        $blog_desc_second = $_POST['blog_desc_second'];
        $blog_point_one = $_POST['blog_point_one'];
        $blog_point_two = $_POST['blog_point_two'];
        $blog_desc_two = $_POST['blog_desc_two'];

        // Insert blog data into blogs table (with current date)
        $sql = "INSERT INTO blogs (blog_url, blog_heading, blog_desc_first, blog_desc_second, blog_point_one, blog_point_two, blog_desc_two, created_at)
                VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssssss", $blog_url, $blog_heading, $blog_desc_first, $blog_desc_second, $blog_point_one, $blog_point_two, $blog_desc_two);
        $stmt->execute();
        $blog_id = $stmt->insert_id;

        // Image upload function
        function uploadImages($files, $blog_id, $column_name, $con) {
            $target_dir = "../blog/blog_uploads/";
            foreach ($files['name'] as $key => $image_name) {
                $image_tmp = $files['tmp_name'][$key];
                $unique_name = time() . "_" . $image_name;
                $target_file = $target_dir . $unique_name;

                if (move_uploaded_file($image_tmp, $target_file)) {
                    $sql = "INSERT INTO blogs_images (blog_id, $column_name) VALUES (?, ?)";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("is", $blog_id, $unique_name);
                    $stmt->execute();
                }
            }
        }

        // Upload images
        if (!empty($_FILES['images']['name'][0])) {
            uploadImages($_FILES['images'], $blog_id, 'image', $con);
        }

        // Upload logos
        if (!empty($_FILES['logos']['name'][0])) {
            uploadImages($_FILES['logos'], $blog_id, 'logos', $con);
        }

        $con->commit();
        header('Location: blog_list.php');
        exit();
    } catch (Exception $e) {
        $con->rollback();
        echo "Error: " . $e->getMessage();
    }
}
?>
