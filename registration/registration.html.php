<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Registration - Ace in the Hole</title>
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
            <h2>Registration</h2>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <form method="post" action=" ">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Type your full name here" value="" required="">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="age">Age</label>
                                        <input type="text" class="form-control" id="age" name="age" placeholder="Type your age here" value="" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="role">Role</label>
                                        <select class="custom-select d-block w-100" name="role" id="role" required="">
                                            <option value="">Choose...</option>
                                            <option>Athlete</option>
                                            <option>Volunteer</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/.row-->

                                <div class="mb-3">
                                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                                </div>

                                <div class="mb-3">
                                    <label for="address">Emergency Contact Name</label>
                                    <input type="text" class="form-control" id="emergencyContact" name="emergencyContact" placeholder="Type your emergency contact here" required="">
                                </div>

                                <div class="mb-3">
                                    <label for="address2">Emergency Contact Phone Number <span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" name="emergencyPhone" id="emergencyPhone" placeholder="Type your emergency contact phone number here">
                                </div>

                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Gender Identification</label>
                                        <select class="custom-select d-block w-100" name="genderID" id="genderID" required="">
                                            <option value="">Choose...</option>
                                            <option>Female</option>
                                            <option>Male</option>
                                            <option>Non-Binary/Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Saturday Events Registering For:</label>
                                        <select class="custom-select d-block w-100" name="satEventRegister" id="satEventRegister">
                                            <option value="">Choose...</option>
                                            <option>Long Course</option>
                                            <option>Olympic</option>
                                            <option>10K</option>
                                            <option>Half Marathon</option>
                                            <option>Sprint</option>
                                            <option>Try-a-Tri</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="state">Sunday Events Registering For:</label>
                                        <select class="custom-select d-block w-100" name="sunEventRegister" id="sunEventRegister">
                                            <option value="">Choose...</option>
                                            <option>Long Course</option>
                                            <option>Olympic</option>
                                            <option>10K</option>
                                            <option>Half Marathon</option>
                                            <option>Sprint</option>
                                            <option>Try-a-Tri</option>
                                        </select>
                                    </div>
                                </div>
                                <textarea class=" d-block w-100" name="comments" id="comments" rows="5"></textarea>
                                <br>
                                <input id="mysubmit" type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
                <!--/.col-md-9-->
                <div class="col-md-3 two">
                    <ul>
                        <li><strong>Long Course</strong> $240</li>
                        <li><strong>Olympic</strong> $110</li>
                        <li><strong>10K</strong> $50</li>
                        <li><strong>Half Marathon</strong> $75</li>
                        <li><strong>Sprint</strong> $90</li>
                        <li><strong>Try-a-Tri</strong> $65</li>
                    </ul>

                    <h3>Cost Includes</h3>
                    <ul>
                        <li>Food & Beer</li>
                        <li>Access to the weekend's live entertainment & Fitness Expo</li>
                        <li>Commemorative Finisher medal</li>
                        <li>Accurate Chip Timing for competitive races</li>
                        <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                        <li>Post-event party & entertainment</li>
                    </ul>

                    <p><strong>NOTE:</strong> Tech shirts guaranteed to pre-registered participants only.</p>

                </div>
                <!--/.col-md-5-->
            </div>
            <!--/.row-->
        </div><!-- .container-fluid -->
    </main><!-- /main -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>
