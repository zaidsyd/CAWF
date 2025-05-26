<?php
include 'db_con.php';

if (isset($_GET['form_number'])) {
    $form_number = $_GET['form_number'];
    $query = mysqli_query($con, "SELECT * FROM registration_form WHERE form_number='$form_number' AND status='Approved'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cine Artist ID Card</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .id-card {
      background: #fff;
      width: 700px;
      border: 1px solid #000;
      padding: 20px 30px;
      font-family: Arial, sans-serif;
      position: relative;
    }

    .header {
      text-align: center;
      border-bottom: 3px solid #f44336;
      padding-bottom: 5px;
      margin-bottom: 15px;
    }

    .header h4 {
      margin: 0;
      font-weight: bold;
    }

    .header small {
      font-size: 12px;
      display: block;
    }

    .red-text {
      color: red;
      font-weight: bold;
    }

    .photo {
      width: 120px;
      height: 150px;
      border: 1px solid #999;
      object-fit: cover;
    }

    .details p {
      margin: 4px 0;
      font-size: 15px;
    }

    .signature-block {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
      font-size: 14px;
    }

    .signature-block .sign {
      text-align: center;
    }

    .footer {
      border-top: 1px solid #000;
      font-size: 13px;
      padding-top: 5px;
      margin-top: 15px;
      text-align: center;
    }

    .stamp {
      position: absolute;
      left: 280px;
      top: 111px;
      width: 200px;
      opacity: 0.3;
    }

    .watermark {
      position: absolute;
      top: 145px;
      left: 320px;
      width: 180px;
      opacity: 0.2;
      z-index: 0;
    }
  </style>
</head>
<body>

  <div class="id-card">
    <div class="header">
      <h4>Cine Artist And Worker Welfare Federation</h4>
      <small>Orgnation Trade Union ACT 1926<br>
      Registration No AUA/Delhi/2104/2023<br>
      <span class="red-text">(Registered With GOVT OF Delhi)</span></small>
    </div>

    <div class="row">
      <div class="col-md-3 text-center">
        <img src="<?= htmlspecialchars($data['image_path']) ?>" class="photo" alt="Photo">
      </div>
      <div class="col-md-9 details">
        <p><strong>Name:</strong> <?= htmlspecialchars($data['first_name']) ?></p>
        <p><strong>D.O.B:</strong> <?= htmlspecialchars($data['dob']) ?></p>
        <p><strong>Designation:</strong> <?= htmlspecialchars($data['program_type']) ?></p>
        <p><strong>Contact No:</strong> <?= htmlspecialchars($data['phone']) ?></p>
        <p><strong>Address:</strong> <?= htmlspecialchars($data['address']) ?></p>
      </div>
    </div>

    <img src="./assets/img/cawf black.png" class="stamp" alt="Stamp">

    <div class="signature-block">
      <div class="sign">
        <p>President</p>
       <p>President Sign</p>
      </div>
      <div class="sign">
        <p>Secretary</p>
       <p>Secretary Sign</p>
      </div>
    </div>

    <div class="footer">
      Member Ship No :- A018 &nbsp;&nbsp; Issued :- 24-05-2025 &nbsp;&nbsp; Valid Upto :- 17-08-2026
    </div>
  </div>

</body>
</html>
 <?php
    } else {
        echo "<h3>Invalid or Unapproved Form Number.</h3>";
    }
} else {
    echo "<h3>No Form Number Provided.</h3>";
}
?>