<?php
$conn = mysqli_connect('localhost', 'root', '','database123');

/* $servername="localhost";
 $username="root";
 $password="";
 $database_name="database123";
 $conn=mysqli_connect($servername,$username,$password,$database_name);
*/
 //now  check for connection
 if(!$conn){
 	die("connection to database failed:".mysqli_connect_error());
 }

 if(isset($_POST['submit']))
 {
 	$Event_from=$_POST['Event_from'];
 	$Event_to=$_POST['Event_to'];
 	 $Event_time=$_POST['Event_time'];
    $Event_date=$_POST['Event_date'];
    $Email=$_POST['Email'];
 	$Address=$_POST['Address'];
 	$Event_name = $_POST['Event_name'];
    $Event_category=$_POST['Event_category'];
    $Other_suggestion=$_POST['Other_suggestion'];
 	$Organizer_description=$_POST['Organizer_description'];
 	$what_service=$_POST['what_service'];
 
	$sql_query="INSERT INTO `entry_details`(`Event_from`, `Event_to`, `Event_time`, `Event_date`, `Email`, `Address`, `Event_name`, `Event_category`, `Other_suggestion`, `Organizer_description`, `what_service`) VALUES('$Event_from','$Event_to','$Event_time','$Event_date','$Email','$Address','$Event_name','$Event_category','$Other_suggestion','$Organizer_description','$what_service')";

  if (mysqli_query($conn,$sql_query))
  {
  	echo "detailed entry inserted!";

  }else{

  	echo"Error:".$sql."".mysqli_error($conn);
  }
  mysqli_close($conn);


}
?>