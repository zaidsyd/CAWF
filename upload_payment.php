<?php
include('db_con.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['id'])) {
        die("Required data missing.");
    }

    $id = intval($_POST['id']);

    if (isset($_FILES['qr_image']) && $_FILES['qr_image']['error'] === 0) {
        $target_dir = "uploads/qrimage/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $filename = uniqid() . "_" . basename($_FILES["qr_image"]["name"]);
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($_FILES["qr_image"]["tmp_name"], $target_file)) {
            $stmt = $con->prepare("UPDATE registration_form SET qr_image = ? WHERE id = ?");
            $stmt->bind_param("si", $target_file, $id); // Corrected here

            if ($stmt->execute()) {
                $_SESSION['payment_update_msg'] = "Payment proof uploaded successfully.";
                header("Location: congratulation.php");
                exit;
            } else {
                die("Database update failed: " . $stmt->error);
            }
        } else {
            die("Failed to upload file.");
        }
    } else {
        die("No file uploaded or upload error.");
    }
}
?>


