<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <style type="text/css">
 body {background-image:url(pic7.jpg);
		 backgroud-size:100p% 100%;
		 background-repeat:no-repeat;
		  }
 #header {  font-size:22px;
          height:50px;
        font:Georgia, "Times New Roman", Times, serif;
	  text-transform:capitalize;
	  }
.p1 
 {  border: 1px solid black;
 width:50%;
       outline-color:#000000;
	   }
.button1 { 
  display: inline-block;
  background-color:#CCCCCC;
  border-radius: 4px;
  border: none;
  height: 50px;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 170px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  		   
          }
.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;

}
.button1:hover{
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  opacity: 1;
  right: 0;
}
.button { 
  display: inline-block;
  border-radius: 4px;
  background-color:#CCCCCC;
  border: none;
  height: 50px;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  		   
          }
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;

}
.button:hover{
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<?php
session_start();
if(isset($_REQUEST['p']))
$iroll=addslashes($_REQUEST['p']);
//echo $iroll;
if(isset($iroll))
	{
$c=mysqli_connect("localhost","root","shefali321");
$db=mysqli_select_db($c,"gatechecker");
$st="select * from details where roll='$iroll'";
$qr=mysqli_query($c,$st);
echo "<form method='get'>";
echo "<input type='hidden' name='uid' value='".$iroll."'>";
echo "<table align='center' cellpadding='6' cellspacing='6' class='p1' >";
echo "<tr><td id='header' colspan='4' align='center'><h2>HALL-TICKET</h2></td></tr>";
echo "<tr><td colspan='4'><hr/></td></tr>";
while($r=mysqli_fetch_row($qr))
{
$p=$r[1];
echo "<tr><td id='header'>Name</td><td>:</td><td id='header'>".$r[2]."</td</tr>";
header("content_type:image/jpeg");
echo  "<td id='header'><img src='data:image/jpeg;base64,".base64_encode($r[9])."' width='100' height='100'></td></tr>";
echo "<tr><td id='header'>Roll Number</td><td>:</td><td id='header'>".$p."</td>";
echo"<tr><td id='header'>Degree</td><td>:</td><td id='header'>".$r[3]."</td></tr>";
echo "<tr><td id='header'>Branch</td><td>:</td><td id='header'>".$r[4]."</td></tr>";
echo "<tr><td id='header'>College</td><td>:</td><td id='header'>".$r[5]."</td></tr>";
echo "<tr><td id='header'>Seat Number</td><td>:</td><td id='header'>".$r[0]."</td></tr>";
echo "<tr><td colspan='3' align='center'><button class='button1'  title='Click here to print' name='sub1' onClick=print()><span>Print</span></button></td></tr>";
echo "<tr><td colspan='3' align='center'><button class='button'  title='Click here to send sms' name='sub2'><span>Send Confirmation</span></button></td></tr>";
echo "</table>";
echo "</form>";
if(isset($_GET['sub2']))
{
require("class-Clockwork.php");
$apikey=("75ea8da972a21a213d183f5333082b5fa3399744");
$clockwork = new Clockwork($apikey);
// Setup and send a message
$message = array( "to" => $r[6], "message" => "You have successfully registered for the Guest Lecture." );
$result = $clockwork->send($message);

// Check if the send was successful
if( $result["success"] ) {
    echo "Message sent - ID: " . $result["id"];
    }
	else {
    echo "Message failed - Error: " . $result["error_message"];
       }
  }
 }
}
?>
</body>
</html>
