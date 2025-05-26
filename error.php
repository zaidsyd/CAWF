<?php
$msg = $_GET['msg'] ?? 'unknown';

switch ($msg)
{
    case 'terms':
        $error = "Please accept the terms and conditions.";
        break;
    case 'phone':
        $error = "Phone number must be 10 digits.";
        break;
    case 'aadhaar':
        $error = "Aadhaar number must be 12 digits.";
        break;
    case 'image':
        $error = "Failed to upload image.";
        break;
    case 'insert':
        $error = "Error saving data.";
        break;
    default:
        $error = "Unknown error occurred.";
}
?>