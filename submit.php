<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Registration Details</h2>

        <p><strong>Full Name:</strong> <?php echo $_POST['fullname']; ?></p>
        <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
        <p><strong>Gender:</strong> <?php echo $_POST['gender']; ?></p>
        <p><strong>Address:</strong> <?php echo nl2br($_POST['address']); ?></p>

        <button onclick="window.print()">Print</button>
    </div>
</body>
</html>
