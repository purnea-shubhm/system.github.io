<?php
	$fname = $_POST['fName'];
	$lname = $_POST['lname'];
    $email = $_POST['email'];
     $mno = $_POST['mno'];
     $gender = $_POST['gender'];
     $purpose= $_POST['purpose'];
     $edate = $_POST['edate'];
     //database
     $con =new mysqli('localhost','root','','visitors');
     if($con->connect_error)
     {
		die('connection failed : '.$conn->connect_error);

     } else{
     		$stmt =$conn->prepare("insert into registration(fname,lname,email,mno,gender,pupose,edate)
     			value(? , ?, ? , ?, ? , ?, ?);
     			$stmt->bind_parm("sssss",$fname, $lname ,$email,$mno, $gender,$purpose,$edate);
     			$stmt->execute();
     			echo"you are redy to visite...";
     			$stmt->close();
     			$conn->close();

     }





?>