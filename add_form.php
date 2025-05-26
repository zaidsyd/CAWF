<?php
include('db_con.php');
session_start(); // Start session

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (!isset($_POST['terms']))
    {
        header("Location: error.php?msg=terms");
        exit;
    }


    $form_number = 'REG' . rand(100000, 999999);

    $first_name = trim($_POST['first_name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $aadhaar = trim($_POST['aadhaar']);
    $program_type = $_POST['program_type'];
    $address = trim($_POST['address']);


    if (!preg_match('/^\d{10}$/', $phone))
    {
        header("Location: error.php?msg=phone");
        exit;
    }

    if (!preg_match('/^\d{12}$/', $aadhaar))
    {
        header("Location: error.php?msg=aadhaar");
        exit;
    }

    $image_path = '';
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0)
    {
        $target_dir = "uploads/";
        if (!file_exists($target_dir))
        {
            mkdir($target_dir, 0777, true);
        }

        $file_tmp = $_FILES["image_path"]["tmp_name"];
        $file_name = basename($_FILES["image_path"]["name"]);
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
        $allowed_mime = ['image/jpeg', 'image/png', 'image/gif'];

        $mime = mime_content_type($file_tmp);

        if (in_array($file_ext, $allowed_ext) && in_array($mime, $allowed_mime))
        {
            $filename = uniqid("img_") . "." . $file_ext;
            $target_file = $target_dir . $filename;

            if (move_uploaded_file($file_tmp, $target_file))
            {
                $image_path = $target_file;
            } else
            {
                header("Location: error.php?msg=image_upload_failed");
                exit;
            }
        } else
        {
            header("Location: error.php?msg=invalid_image_type");
            exit;
        }
    }



    $stmt = $con->prepare("INSERT INTO registration_form (form_number, first_name,phone, email, dob, gender, aadhaar, program_type, address, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $form_number, $first_name, $phone, $email, $dob, $gender, $aadhaar, $program_type, $address, $image_path);

    if ($stmt->execute())
    {

        $id = $con->insert_id;  // Get the auto-increment ID of the inserted row

        $_SESSION['thank_you_name'] = $first_name . ' ' . $last_name;
        $_SESSION['thank_you_form_number'] = $form_number;
        $_SESSION['id'] = $id;

        header("Location: thankyou.php");
        exit;
    } else
    {
        header("Location: error.php?msg=insert");
        exit;
    }

    $stmt->close();
    $con->close();
}
?>