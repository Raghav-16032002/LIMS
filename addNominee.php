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
    <title>Add Nominee</title>
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
<?php 
include 'header.php'; 

$uniqueId2 = time().'-'.mt_rand();

if(isset($_GET["client_id"])){
$client_id       = $_GET["client_id"];
}else{ $client_id="";
}
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Nominee</h1>
						
<form action="insertNominee.php" method="post">

Nominee ID:    <input type="text" name="nominee_id" value="<?php echo"$uniqueId2"; ?>"required ><br>
Client ID:     <input type="text" name="client_id"  value="<?php echo"$client_id"; ?>" required placeholder="Enter Client ID"><br>
Name:          <input type="text" name="name" required placeholder="Enter Nominee Name" id="Name"><br><br>
GENDER:          &nbsp;&nbsp;<input type="radio" name="sex" required value="Male">&nbsp; Male
                 &nbsp;&nbsp;<input type="radio" name="sex" required value="Female">&nbsp; Female
                 &nbsp;&nbsp;<input type="radio" name="sex" required value="Other">&nbsp; Other<br><br>
Birth Date:      &nbsp;&nbsp;<input type="date" name="birth_date" required><br><br>
NID:           <input type="text" name="nid" required placeholder="Enter 12 Digit National ID" id="NID"><br>
Relationship:  <input type="text" name="relationship" required placeholder="Enter Relationship With Client" id="Relationship"><br>
Priority:      <input type="text" name="priority" required placeholder="Enter Priority With Client" id="Priority"><br>
Phone:         <input type="text" name="phone" required placeholder="Enter 10 Digit Phone Number" id="Mobile"><br>

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

        //Name Validation
        var name=document.getElementById('Name');
        var NameExp=/^[a-zA-Z ]{2,30}$/;
        if(!name.value.match(NameExp))
		{
			alert("Please Don't Enter Digits in Name");
			name.focus(); // set the focus to this input
			return false;
		}

        //National Id Validation
        var nid = document.getElementById('NID');
        var NIDExp = /^[1-9][0-9]{11}$/;
        if(!nid.value.match(NIDExp))
		{
			alert("Please Enter 12 Digit National ID");
			// nid.value="Please Enter 12 Digit National ID";
			nid.focus(); // set the focus to this input
			return false;
		}

         //Relationship Validation
         var name=document.getElementById('Relationship');
         var NameExp=/^[a-zA-Z ]{2,30}$/;
        if(!name.value.match(NameExp))
		{
			alert("Please Don't Enter Digits in Relationship");
			name.focus(); // set the focus to this input
			return false;
		}

        // Priority Validation
		var mobile = document.getElementById('Priority');
		var phExp = /^[1-9]$/;
		if(!mobile.value.match(phExp))
		{
			alert("Please Enter Correct Priority.");
			// mobile.value="Please Enter 10 Digit Phone Number";
			mobile.focus(); // set the focus to this input
			return false;
		}

        // Mobile Number Validation
		var mobile = document.getElementById('Mobile');
		var phExp = /^[6-9][0-9]{9}$/;
		if(!mobile.value.match(phExp))
		{
			alert("Please Enter 10 Digit Mobile Number.");
			// mobile.value="Please Enter 10 Digit Phone Number";
			mobile.focus(); // set the focus to this input
			return false;
		}

		return true;
	}
</script>    