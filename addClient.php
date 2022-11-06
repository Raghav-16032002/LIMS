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
    <title>Add Client</title>
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
$uniqueId  = time();
$uniqueId2 = time().'-'.mt_rand();

// if(isset($_POST['submit'])){
//     $mb=$phoneno="";
//     $count=0;

//     //Mobile number
//     if (empty($_POST['phone'])) {
//          $mb = "required";
//          echo $mb;
//          $count=1;

//     }

//     else 
//      {
        
//          if (preg_match("/^[0-9]{10}+$/",$_POST['phone'])) {
//             header("Location:insertClient.php");
//             // if(strlen($_POST['phone'])==10)
//             // {
//             //     $phoneno=$_POST['phone'];

//             //     $count=5;
//             //     // alert(strlen($_POST['phone']));
//             //   //  header("Location:insertClient.php");
                
//             // }
//             // else
//             // {
//             //     $mb="Please Check Phone Number";
//             //     echo $mb;
//             //     $count=1;
//             // }
//          }
//          else
//          {
//             $mb="use only numbers";
//             echo $mb;
//             $count=1;
//          }
         
//      }
     
// }
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Client</h1>
						

             

<form  action="insertClient.php" method="post" enctype="multipart/form-data">
Client ID:       <input type="text" name="client_id" value="<?php echo"$uniqueId"; ?>" required><br>
Client Password: <input type="password" name="client_password" required  placeholder="Enter Password" id="myInput"><br>
<input type='checkbox' onclick='myFunction()'>Show Password<br>
Name:            <input type="text" name="name" required placeholder="Enter Full Name" id="NAME"><br>
Image		     <input class="img" type="file" name="fileToUpload" required> </br>
GENDER:          &nbsp;&nbsp;<input type="radio" name="sex" required value="Male">&nbsp; Male
                 &nbsp;&nbsp;<input type="radio" name="sex" required value="Female">&nbsp; Female
                 &nbsp;&nbsp;<input type="radio" name="sex" required value="Other">&nbsp; Other<br><br>
Birth Date:      &nbsp;&nbsp;<input type="date" name="birth_date" required><br><br>
Marital Status:  &nbsp;&nbsp;<input type="radio" name="maritial_status" value="Single" required>&nbsp;Single
                 &nbsp;&nbsp;<input type="radio" name="maritial_status" value="Married" required>&nbsp;Married
                 &nbsp;&nbsp;<input type="radio" name="maritial_status" value="Divorce" required>&nbsp;Divorce<br><br>
National ID:     <input type="text" name="nid" required placeholder="Enter 12 Digit National ID" id="NID"><br>
Phone:           <input type="text" name="phone" required placeholder="Enter 10 Digit Phone Number" id="Mobile"><br>


Address:         <input type="text" name="address" required placeholder="Enter Address"><br>
Policy ID:       <input type="text" name="policy_id" required placeholder="Enter Policy ID"><br>
Agent ID:        <input type="text" name="agent_id" value="<?php echo $_SESSION["username"]; ?>" required><br>

<h3>Nominee Informations </h3>

Nominee ID:    <input type="text" name="nominee_id" value="<?php echo"$uniqueId2"; ?>" required > <br>
Name:          <input type="text" name="nominee_name" required placeholder="Enter Nominee Full Name" id="NNAME"><br><br>
GENDER:          &nbsp;&nbsp;<input type="radio" name="nominee_sex" value="Male" required>&nbsp; Male
                 &nbsp;&nbsp;<input type="radio" name="nominee_sex" value="Female" required>&nbsp; Female
                 &nbsp;&nbsp;<input type="radio" name="nominee_sex" value="Other" required>&nbsp; Other<br><br>
                 <!-- <input type="text" name="nominee_sex" required><br> -->
Birth Date:    <input type="date" name="nominee_birth_date" required><br><br>
National ID:   <input type="text" name="nominee_nid" required placeholder="Enter 12 Digit National ID" id="NNID"><br>
Relationship:  <input type="text" name="nominee_relationship" required placeholder="Enter Relationship With Client"><br>
Priority:      <input type="text" name="priority" required placeholder="Enter Nominee Priority"><br>
Phone:         <input type="text" name="nominee_phone" required placeholder="Enter 10 Digit Phone Number" id="NMobile"><br>


<input type="submit" name="submit" onclick="return checkdetails();"/>

</form>
		 
&nbsp;
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
        var name=document.getElementById('NAME');
        var NameExp=/^[a-zA-Z ]{2,30}$/;
        if(!name.value.match(NameExp))
		{
			alert("Please Don't Enter Digits in Name");
			name.focus(); // set the focus to this input
			return false;
		}

        //Password Validation
        var password = document.getElementById('myInput');
        if(password.value.length < 4)
		{
			alert('Please Enter Minimum 4 Character For Password.');
			password.focus();
			return false;
		}
    
        //National Id Validation
        var nid = document.getElementById('NID');
        var NIDExp = /[1-9][0-9]{11}/;
        if(!nid.value.match(NIDExp))
		{
			alert("Please Enter 12 Digit National ID");
			// nid.value="Please Enter 12 Digit National ID";
			nid.focus(); // set the focus to this input
			return false;
		}

        // Mobile Number Validation
		var mobile = document.getElementById('Mobile');
		var phExp = /[6-9][0-9]{9}/;
		if(!mobile.value.match(phExp))
		{
			alert("Please Enter 10 Digit Mobile Number.");
			// mobile.value="Please Enter 10 Digit Phone Number";
			mobile.focus(); // set the focus to this input
			return false;
		}

        //Nominee Name Validation
        var name=document.getElementById('NNAME');
        var NameExp=/^[a-zA-Z ]{2,30}$/;
        if(!name.value.match(NameExp))
		{
			alert("Please Don't Enter Digits in Name");
			name.focus(); // set the focus to this input
			return false;
		}

        //Nominee National Id Validation
        var nid = document.getElementById('NNID');
        var NIDExp = /[1-9][0-9]{11}/;
        if(!nid.value.match(NIDExp))
		{
			alert("Please Enter 12 Digit National ID");
			nid.focus(); // set the focus to this input
			return false;
		}
        
        // Nominee Mobile Number Validation
		var mobile = document.getElementById('NMobile');
		var phExp = /[6-9][0-9]{9}/;
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