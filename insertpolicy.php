<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Agent</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Policy
						<button class="btn" align="center"> 
                        <a href="addPolicy.php" class="btn">Add Policy</a>
                        </button>
						</h1>
<?php

include 'connection.php';


	    $policy_id      = $_POST["policy_id"];
		$term           = $_POST["term"];
		$health_status  = $_POST["health_status"];
		$system         = $_POST["system"];
		$payment_method = $_POST["payment_method"];
        $coverage       = $_POST["coverage"];
        $age_limit      = $_POST["age_limit"];
		
	$sql = "INSERT INTO policy "."VALUES('$policy_id','$term','$health_status', '$system', '$payment_method', '$coverage', '$age_limit')";
	
	if ($conn->query($sql) === true) {
			echo "<div style='font-size:20px;color:black'>New Policy ADDED</div>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
?>
                </div>   
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
</body>
</html>
