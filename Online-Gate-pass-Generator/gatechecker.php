<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>LOGIN FORM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css"> 
body{background-image:url(pic1.jpg);
    background-repeat:no-repeat;
	background-size:100% 100%;
	}

.error {color:#FF0000;}
 
#f1 {border: 1px;
           width:400px;
          height:30px;
          text-align: center;
	  border-style:groove;
	  border-radius: 4px;
	text-transform:capitalize;
	}
#f2 {border: 1px;
      width:400px;
       height:30px;
      text-align: center;
	  border-style:groove;
	  border-radius: 4px;
	text-transform:lowercase;
	}

.button { 
  display: inline-block;
  border-radius: 4px;
  border: none;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  		   
          }
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
		  
#login { size:20px;
          font:"Courier New", Courier, mono;
		  font-style:normal;
		 }
		 </style>
<script language="javascript">
function check(val){
regex=new RegExp("[a-z]$");

if(!(regex.test(val)))
{
alert("Special characters are not allowed");
document.frm.t1.value="";

}
}
function check1(val){
regex=new RegExp("[a-z]$");

if(!(regex.test(val)))
{
alert("Special characters are not allowed");
document.frm.t5.value="";

}
}

</script>
	<script language="javascript">
function check2(val){
regex=new RegExp("[0-9]$");

if(!(regex.test(val)))
{
alert("Special characters and alphabets are not allowed");
document.frm.t6.value="";
}
}
function check3(val){
if(val.length!=10)
{
alert("Invalid mobile number");
document.frm.t6.value="";
}
}
function check4(val){
var at="@"
var dot="."
var lat=val.indexOf(at)
var lval=val.length
var ldot=val.indexOf(dot)
if(val.indexOf(at)==-1)
alert("Invalid email");
}

/*var _validFileExtensions=[".jpg",".jpeg",".bmp",".gif",".png"];
function Validate(oform){
var arrInputs=oform.getElementByTagName("input");
for(var i=0;i<arrInputs.length;i++){
var oInput=arrInputs[i];
  if(oInput.type=="file"){
      varsFileName=oInput.value;
	     */
 
</script>
	 
</head>
<body>
<br>
<h2><center><strong><h2><u>REGISTRATION FORM</u></h2></strong></center></h2>
<?php
/*
$nameErr =$rollErr=$colgErr= $phErr =$emailErr = "";
$nam = $rol= $clg = $phn = $emil = "";
$count=0;
//if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if (empty($_POST["t1"])) {
     $nameErr = " ";
	$count++; 
   } else {
     $nam = test_input($_POST["t1"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$nam)) {
       $nameErr = "[a-zA-Z ] Only letters and white space allowed";
	   $count++; 
     }
   }
   if (empty($_POST["t2"])) {
     $rollErr = "";
	 $count++;
   } else {
     $rol = test_input($_POST["t2"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9]*$/",$rol)) {
       $rollErr = "[a-zA-Z0-9]Only letters and numerics are allowed"; 
	   $count++;
     }
   }
   if (empty($_POST["t5"])) {
     $colgErr = "";
	 $count++;
   } else {
     $clg = test_input($_POST["t5"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$clg)) {
       $colgErr = "[a-zA-Z]Only letters are allowed"; 
	   $count++;
     }
   }
   if (empty($_POST["t6"])) {
     $phErr = "";
	 $count++;
   } else {
     $phn = test_input($_POST["t6"]);
     // check if name only contains letters and whitespace
     if ((!preg_match("/^[0-9]*$/",$phn)) && $phn!=10) {
       $phErr = "[0-9]Only  numerics are allowed of 10 digits";
	   $count++; 
     }
   }

   
   if (empty($_POST["t7"])) {
     $emailErr = " ";
	 $count++;
   } else {
     $emil = test_input($_POST["t7"]);
     // check if e-mail address is well-formed
     if (!filter_var($emil, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
	   $count++;
     }
   }
 //}       
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}*/
?>
<form method="post" name="frm" enctype="multipart/form-data">
<table align="center" cellpadding="8" cellspacing="8"> 
<tr>
<td><span class="error"><strong>* required field</strong></span></td>
</tr>
<tr>
    <td id="login">   FIRST NAME :</td>
	<td> <input type="text" name="t1" placeholder="Enter Your Name" id="f1" onKeyUp="check(this.value)" ></td>
	<td><span class="error">* <?php //echo $nameErr;?></span>
</td>
</tr>
<tr>
     <td id="login">   ROLL NUMBER: </td>
	 <td><input type="text" name="t2" placeholder="Enter Your Roll Number" id="f1" ></td>
	 <td><span class="error">* <?php //echo $rollErr;?></span>
</td> 
</tr>
<tr>
      <td id="login">   DEGREE :</td>
	  <td>
	 
	   <select id="f1" name="name">
	    <option >-Select-</option>
		     <option name="name1">B-Tech</option>
		    <option name="name2">BT-MT</option>
		    <option name="name3">BS-MS</option>
		    <option name="name4">MBA</option>
		    <option name="name5">B.Sc</option>
		     <option name="name6">M.Sc</option>
		     </select>
			</td>
</tr>

<tr>
     <td id="login">  DISCIPLINE: </td>
	  <td>
	     
	     <select id="f1" name="nme">
		  <option>-Select-</option>
		     <option name="nme1">Bio Engineering</option>
		    <option name="nme2">Chemical Engineering</option>
		    <option name="nme3">Civil Engineering</option>
		    <option name="nme4">Computer Science & Engineering</option>
		    <option name="nme5">Electrical Engineering</option>
		    <option name="nme6">Electronics & Communication Engineering</option>
		    <option name="nme7">Electronics & Instrumentation Engineering</option>
	        <option name="nme8">Mechanical Engineering</option>
		    <option name="nme9">Production Engineering</option>
		    <option name="nme10"> Humanities & Social Sciences</option>
		     <option name="nme11">Physcis</option>
			 <option>Chemistry</option>
			 <option>Mathematics</option>
		
			 </select>
	  </td>
</tr>
<tr>
     <td id="login"> COLLEGE NAME:</td>
	 <td><input type="text" name="t5" placeholder="Enter Your College Name" id="f1" onKeyUp="check1(this.value)"></td>
	 <td><span class="error">* <?php //echo $colgErr;?></span>
</td>
</tr>
<tr>
    <td id="login">   PHONE NUMBER:</td>
	<td><input type="text" name="t6" placeholder="Enter Your Phone number" id="f1" onKeyUp="check2(this.value)" onChange="check3(this.value)"></td>
	 <td><span class="error">* <?php //echo $phErr;?></span>
</td>
</tr>
<tr>
   <td id="login">   EMAIL ID:</td>
   <td><input type="text" name="t7" placeholder="Enter Your Email id" id="f2" value="<?php //echo $emil;?>" onChange="check4(this.value)"></td>
    <td><span class="error">* <?php //echo $emailErr;?></span>
</td>
</tr>
<tr>
   <td id="login">UPLOAD IMAGE:</td>
  <td><input type="file" name="imagename" id="f1" ></td>
</tr>
<tr>
      <td align="center"><button class="button"  title="Click here to register" name="sub" value="Register" onClick="alter('Registered Successfully')"><span>Register</span></button></td>
<?php
if(isset($_POST['sub']))
{
$name=$_POST['t1'];
$roll=$_POST['t2'];
$degree=$_POST['name'];
$branch=$_POST['nme'];
$colg=$_POST['t5'];
$ph=$_POST['t6'];
$email=$_POST['t7'];
$c=mysqli_connect("localhost","root","shefali321");
$db=mysqli_select_db($c,"gatechecker");
$file=$_FILES['imagename']['tmp_name'];
if(!$file)
{
echo "<span class='error'><strong><center>*Please select an image </center></strong></span>";
}
else
{
$image=addslashes(file_get_contents($_FILES['imagename']['tmp_name']));
$image_name=addslashes($_FILES['imagename']['name']);
$str="insert into details values('','$roll','$name','$degree','$branch','$colg','$ph','$email','$image_name','$image')";
$qry=mysqli_query($c,$str);
if($qry)
{//echo "<h1 align='center'>Data inserted</h1><br>";
echo "<td><a href='pass.php?p=$roll'>CLICK HERE TO GENERATE HALL-TICKET</a></td></tr>";
}
else
{
echo "Data insertion failed<br>";
}
}
}
/*if(isset($_POST['sub1']))
{
$c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"gatechecker");
$str="select * from detail";
$qr=mysqli_query($c,$str);
echo "<form><br><br>";
echo "<table border='1' width='50%' align='center' bgcolor='#66FF99'>";
echo "<tr><td>Name</td><td>Roll Number</td><td>College</td><td>Phone Number</td><td>Email id</td><td>Salary</td></tr>";
$n=1;
$tb='t';
$tb=$tb.$n;
while($r=mysqli_fetch_row($qr))
{
$p=$r[0];
echo "<tr><td>".$r[0]."</td>";
echo "<td align='center'><input type='text' value='".$r[1]."' name='".$tb."'></td>";
$n++;
$tb=$tb.$n;
echo "<td align='center'><input type='text' value='".$r[2]."' name='".$tb."'></td>";
$n++;
$tb=$tb.$n;
echo "<td align='center'><input type='text' value='".$r[3]."' name='".$tb."'></td>";
$n++;
$tb=$tb.$n;
echo "<td align='center'><input type='text' value='".$r[4]."' name='".$tb."'></td>";
echo "<td align='center'><a href='up.php?p=$p'>Update</a></td>"; 
echo "<td align='center'><a href='delete.php?p=$p'>Delete</a></td>";
}
}
echo "</table>";
echo "</form>";*/
?>
</table>
</form>
</body>
</html>
