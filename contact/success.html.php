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
    <main role="main" class="container-fluid">
        <div class="jumbo01 container-fluid">
        </div>
        <div class="container-fluid temp">
            <h1>Thank you!</h1>
            <p>Our records show you submitted the following:<br>
                <strong>Name</strong> <?php echo htmlspecialchars($myname, ENT_QUOTES); ?><br>
                <strong>Email:</strong> <?php echo htmlspecialchars($myemail, ENT_QUOTES); ?><br>
                <strong>Questions:</strong> <?php echo htmlspecialchars($mycomment, ENT_QUOTES); ?><br>
            </p>
        </div>
        <!--/.container-fluid -->
    </main><!-- /main -->
    <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>
