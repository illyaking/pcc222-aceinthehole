<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Contact - Ace in the Hole</title>
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/grid.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../fontawesome/css/all.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light" cz-shortcut-listen="true">
    <?php include '../includes/header.inc.html.php'; ?>
    <main role="main">
        <div class="jumbo01 container-fluid">
            <h2>Contact</h2>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 order-md-1">
                    <form method="post" action=" ">
                        <div class="mb-3">
                            <label for="myname">Name</label>
                            <input type="text" class="form-control" name="myname" id="myname" placeholder="Type your full name here" value="" required="">
                        </div>
                        <div class="mb-3">
                            <label for="myemail">Email <span class="text-muted">(Optional)</span></label>
                            <input type="myemail" class="form-control" id="myemail" name="myemail" placeholder="you@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="myrole">Who is sending this email?</label>
                            <select class="custom-select d-block w-100" name="myrole" id="myrole" required="">
                                <option value="">Choose...</option>
                                <option>Athlete</option>
                                <option>Volunteer</option>
                                <option>Interested Party</option>
                            </select>
                        </div>

                        <textarea class=" d-block w-100" name="mycomment" id="mycomment" rows="5"></textarea>
                        <br>
                        <input id="mysubmit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div><!-- .container-fluid -->
    </main><!-- /main -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>