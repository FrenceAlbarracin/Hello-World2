<?php
 $Name="";
 $Personal_id="";
 $Birthday="";
 $Phone_number="";
 $Address="";
 $Postal_Code="";
 $Department="";
 $Possition="";
 $Gender="";
 $Status="";
 $Company_id="";

$db=mysqli_connect('localhost','root','','wtf database');

if (isset ($_POST['submmit'])){
    $Name=$_POST['Name'];
    $Personal_id=$_POST['Personal_id'];
    $Birthday=$_POST['Birthday'];
    $Phone_number=$_POST['Phone_number'];
    $Address=$_POST['Address'];
    $Postal_Code=$_POST['Postal_Code'];
    $Department=$_POST['Department'];
    $Possition=$_POST['Position'];
    $Gender=$_POST['Gender'];
    $Status=$_POST['Status'];
    $Company_id=$_POST['Company_id'];
    $Employee_id=$_POST['Employee_id'];

  $sql= mysqli_query("INSER INTO mydatabase(ID,Name,Personal_id,Birthday,Phone_number,Address,Postal_Code,Department,Possition,Gender,Status,Company_id,)
  VALUE($employee_id,$Name,$Personal_id,$Birthday,$Phone_number,$Address,$Postal_Code,$Department,$Possition,$Gender,$Status,$Company_id,NOW())");

        mysqli_query($db, $query);
        header('location: user.php');
    
}
?>