<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Registration - Ace in the Hole</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light" cz-shortcut-listen="true">
    <?php include '../includes/header.inc.html.php'; ?>
    <main role="main" class="container-fluid temp">
        <div class="container-fluid temp">
        <h1>Thank you!</h1>
        <p>Our records show you submitted the following:<br>
            <strong>Full Name:</strong> <?php echo htmlspecialchars($fullName, ENT_QUOTES); ?><br>
            <strong>Age: </strong> <?php echo htmlspecialchars($age, ENT_QUOTES); ?><br>
            <strong>Role:</strong> <?php echo htmlspecialchars($role, ENT_QUOTES); ?><br>
            <strong>Email:</strong> <?php echo htmlspecialchars($email, ENT_QUOTES); ?><br>
            <strong>Emergency Contact:</strong> <?php echo htmlspecialchars($emergencyContact, ENT_QUOTES); ?><br>
            <strong>Emergency Contact Phone:</strong> <?php echo htmlspecialchars($emergencyPhone, ENT_QUOTES); ?><br>
            <strong>Gender ID:</strong> <?php echo htmlspecialchars($genderID, ENT_QUOTES); ?><br>
            <strong>Saturday Event Registered for:</strong> <?php echo htmlspecialchars($satEventRegister, ENT_QUOTES); ?><br>
            <strong>Sunday Event Registered for:</strong> <?php echo htmlspecialchars($sunEventRegister, ENT_QUOTES); ?><br>
            <strong>Additonal Comments:</strong> <?php echo htmlspecialchars($comments, ENT_QUOTES); ?><br>
        </p>
        </div><!--/.container-fluid -->
    </main><!-- /main -->
    <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>
