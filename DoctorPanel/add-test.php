<?php
include "config.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $services = $_POST['services'];
    $query = mysqli_query($con, "insert into  lab(id,test) value('$id','$services')");
    if ($query) {
        echo "<script>alert('Test has been added.');</script>";
        echo "<script>window.location.href = 'add-test.php'</script>";

    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
} else {
    ?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <title>ADD Test | Divyam Hospital</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
            rel='stylesheet' type='text/css'>
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body class="cbp-spmenu-push">
        <div class="row">
            <div class="col-lg-2">
                <?php include_once('side.php'); ?>
            </div>
            <div class="col-lg-10">
                <div class="main-content">

                    <div id="page-wrapper">
                        <div class="main-page">
                            <div class="forms">
                                <h3 class="title1">Add Test</h3>
                                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                                    <div class="form-title">
                                        <h4>Laboratary Test:</h4>
                                    </div>
                                    <div class="form-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label>Test Name</label>
                                                <input type="text" class="form-control" id="services" name="services"
                                                    placeholder="Test Name" value="" required="true">
                                            </div>

                                            <button type="submit" name="submit" class="btn btn-default">Add</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>
<?php } ?>