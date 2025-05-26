<?php
include('db_con.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check terms checkbox
    if (!isset($_POST['terms'])) {
        header("Location: error.php?msg=terms");
        exit;
    }

    // Generate sequential form number like REG0001, REG0002...
    $result = $con->query("SELECT form_number FROM registration_form ORDER BY id DESC LIMIT 1");
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $last_number = intval(substr($row['form_number'], 3)); // Remove 'REG'
        $new_number = $last_number + 1;
    } else {
        $new_number = 1; // First entry
    }
    $form_number = 'REG' . str_pad($new_number, 4, '0', STR_PAD_LEFT); // REG0001

    // Sanitize inputs
    $first_name = trim($_POST['first_name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $aadhaar = trim($_POST['aadhaar']);
    $program_type = $_POST['program_type'];
    $address = trim($_POST['address']);

    // Phone validation
    if (!preg_match('/^\d{10}$/', $phone)) {
        header("Location: error.php?msg=phone");
        exit;
    }

    // Aadhaar validation
    if (!preg_match('/^\d{12}$/', $aadhaar)) {
        header("Location: error.php?msg=aadhaar");
        exit;
    }

    // Image upload
    $image_path = '';
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_tmp = $_FILES["image_path"]["tmp_name"];
        $file_name = basename($_FILES["image_path"]["name"]);
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
        $allowed_mime = ['image/jpeg', 'image/png', 'image/gif'];

        $mime = mime_content_type($file_tmp);

        if (in_array($file_ext, $allowed_ext) && in_array($mime, $allowed_mime)) {
            $filename = uniqid("img_") . "." . $file_ext;
            $target_file = $target_dir . $filename;

            if (move_uploaded_file($file_tmp, $target_file)) {
                $image_path = $target_file;
            } else {
                header("Location: error.php?msg=image_upload_failed");
                exit;
            }
        } else {
            header("Location: error.php?msg=invalid_image_type");
            exit;
        }
    }

    // Insert into database
    $stmt = $con->prepare("INSERT INTO registration_form (form_number, first_name, phone, email, dob, gender, aadhaar, program_type, address, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $form_number, $first_name, $phone, $email, $dob, $gender, $aadhaar, $program_type, $address, $image_path);

    if ($stmt->execute()) {
        $id = $con->insert_id;

        // Set session variables for thankyou page
        $_SESSION['thank_you_name'] = $first_name;
        $_SESSION['thank_you_form_number'] = $form_number;
        $_SESSION['id'] = $id;

        // Redirect to thankyou page
        header("Location: thankyou.php");
        exit;
    } else {
        header("Location: error.php?msg=insert");
        exit;
    }

    $stmt->close();
    $con->close();
}
?>
