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
        <div class="container-fluid py-5">
            <div class="text-center">
                <h2>Registration</h2>
                <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
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
                            <textarea class=" d-block w-100" name="comments" id="comments" rows="5" ></textarea>
                            <br>
                            <input id="mysubmit" type="submit" value="Submit">
                    </form>
                    </div>
            </div>
        </div><!-- .container-fluid -->
    </main><!-- /main -->
    <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>
