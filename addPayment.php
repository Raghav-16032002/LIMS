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
    <title>Add Payment</title>
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
$uniqueId = time().'_'.mt_rand();
if(isset($_GET["client_id"])){
$client_id       = $_GET["client_id"];
}else{ $client_id="";
}
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Payment</h1>
						
<form action="insertPayment.php" method="post">

Recipt No:     <input type="text" name="recipt_no" value="<?php echo"$uniqueId"; ?>" required><br>
Client Id:     <input type="text" name="client_id" value="<?php echo"$client_id"; ?>" required><br>
Month:         <input type="text" name="month" required id="Month"><br>
Amount:        <input type="text" name="amount" required id="Amount"><br>
Due:           <input type="text" name="due" required id="Due"><br>
Fine:          <input type="text" name="fine" required id="Fine"><br>
Agent Id:      <input type="text" name="agent_id" value="<?php echo $_SESSION["username"]; ?>" required><br>

<input type="submit" name="submit" onclick="return checkdetails();">
</form>
                </div>     
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
</body>
</html>
<script language="javascript" type="text/javascript">

	function checkdetails(){
        //Month Validation
        var name=document.getElementById('Month');
        var NameExp=/^[a-zA-Z ]{2,30}$/;
        if(!name.value.match(NameExp))
		{
			alert("Please Enter Correct Month");
			name.focus(); // set the focus to this input
			return false;
		}

 
        //Amount Validation
		var mobile = document.getElementById('Amount');
		var phExp = /^[0-9]{3}/;
		if(!mobile.value.match(phExp))
		{
			alert("Please Don't Enter Letters in Amount");
			// mobile.value="Please Enter 10 Digit Phone Number";
			mobile.focus(); // set the focus to this input
			return false;
		}
        
        //Due Validation
		var mobile = document.getElementById('Due');
		var phExp = /^[0-9]{2}/;
		if(!mobile.value.match(phExp))
		{
			alert("Please Don't Enter Letters in Due");
			// mobile.value="Please Enter 10 Digit Phone Number";
			mobile.focus(); // set the focus to this input
			return false;
		}

       //Fine Validation
		var mobile = document.getElementById('Fine');
		var phExp = /^[0-9]{2}/;
		if(!mobile.value.match(phExp))
		{
			alert("Please Don't Enter Letters in Fine");
			// mobile.value="Please Enter 10 Digit Phone Number";
			mobile.focus(); // set the focus to this input
			return false;
		}
		return true;
	}
</script>