<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM lab WHERE id = '$id'");
while ($resultData = mysqli_fetch_array($query)) {
    
    $adate = $resultData['test_date'];
    $aptime = $resultData['test_time'];
    $ynote = $resultData['report_result'];
    $repdate = $resultData['report_issue_date'];
    $remark = $resultData['remark'];
    
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Laboratory Edit| Divyam Hospital</title>
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
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <?php include_once('side.php'); ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div class="main-content">
                <div id="page-wrapper">
                    <div class="main-page">
                        <div class="forms">
                            <h3 class="title1">Update Laboratory</h3>
                            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                                <div class="form-title">
                                    <h4>Update Laboratory:</h4>
                                </div>
                                <div class="form-body">
                                    <form name="update_lab" method="post" action="editlab.php">
                                       
                                        
                                        <div class="form-group">
                                            <label for="adate">Test Date</label>
                                            <input type="date" class="form-control " placeholder="Date" name="adate"
                                                id='adate' value="<?php echo $adate; ?>" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="aptime">Test Time</label>
                                            <select name="aptime" id="aptime" required="true" class="form-control">
                                                <option value="<?php echo $aptime; ?>">
                                                    <?php echo $aptime; ?>
                                                <option value="9:00 A.M - 11:00 A.M">9:00 A.M - 11:00 A.M</option>
                                                <option value="11:00 A.M - 1:00 P.M">11:00 A.M - 1:00 P.M</option>
                                                <option value="1:00 P.M - 3:00 P.M">1:00 P.M - 3:00 P.M</option>
                                                <option value="3:00 P.M - 5:00 P.M">3:00 P.M - 5:00 P.M</option>
                                                <option value="5:00 P.M - 7:00 P.M">5:00 P.M - 7:00 P.M</option>
                                                <option value="7:00 P.M - 9:00 P.M">7:00 P.M - 9:00 P.M</option>
                                            </select>
                                        </div>
                                      
                                        
                                        <div class="form-group">
                                            <label for="ynote">Report Result</label>
                                            <input type="text" class="form-control" id="ynote" placeholder="Report Result"
                                                name="ynote" value="<?php echo $ynote; ?>" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="dob">Report Issue Date</label>
                                            <input type="date" class="form-control" placeholder="Report Issue Date" name="repdate"
                                                id='repdate' value="<?php echo $repdate; ?>" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="remark">Remark</label>
                                            <input type="text" class="form-control" id="remark" placeholder="Remark"
                                                name="remark" value="<?php echo $remark; ?>" required="true">
                                        </div>

                                       

                                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>

                                        <button type="submit" name="submit" class="btn btn-default">Update</button>
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