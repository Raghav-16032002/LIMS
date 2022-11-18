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

input[type=password], select {
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
<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Agent</title>
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
                        <h1 class="page-head-line">Add Agent</h1>
						
                    
                

<form action="insertagent.php" method="post">
Agent ID:        <input type="text" name="agent_id" required placeholder="Enter Agent ID"><br>
Agent Password:  <input type="password" name="agent_password" required placeholder="Enter Agent Password" id="myInput"><br>
<input type='checkbox' onclick='myFunction()'>Show Password<br>
Name:            <input type="text" name="name" required placeholder="Enter Full Name" id="Name"><br>
Branch:          <input type="text" name="branch" required placeholder="Enter Branch" id="Branch"><br>
Phone:           <input type="text" name="phone" required placeholder="Enter 10 Digit Mobile Number" id=Mobile><br>

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
        //Password Validation
        var password = document.getElementById('myInput');
        var passwordExp=/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
        if(!password.value.match(passwordExp))
		{
			alert('Please Enter Minimum eight characters, at least one letter, one number and one special character');
			password.focus();
			return false;
		}
        // if(password.value.length < 4)
		// {
		// 	alert('Please Enter Minimum 4 Character For Password.');
		// 	password.focus();
		// 	return false;
		// }

        //Name Validation
        var name=document.getElementById('Name');
        var NameExp=/^[a-zA-Z ]{2,30}$/;
        if(!name.value.match(NameExp))
		{
			alert("Please Don't Enter Digits in Name");
			name.focus(); // set the focus to this input
			return false;
		}

         //Branch Validation
        var Branch=document.getElementById('Branch');
        var BranchExp=/^[a-zA-Z ]{2,30}$/;
        if(!Branch.value.match(BranchExp))
		{
			alert("Please Don't Enter Digits in Branch");
			Branch.focus(); // set the focus to this input
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