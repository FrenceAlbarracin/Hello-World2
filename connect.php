<?php


Require_once "crudies.php";

if (isset ($_POST['submmit'])){

    $ID=$_POST["ID"];
    $Name=$_POST["Name"];
    $Personal_id=$_POST["Personal_id"];
    $Birthday=$_POST["Birthday"];
    $Phone_number=$_POST["Phone_number"];
    $Address=$_POST["Address"];
    $Postal_Code=$_POST["Postal_Code"];
    $Department=$_POST["Department"];
    $Possition=$_POST["Possition"];
    $Gender=$_POST["Gender"];
    $Status=$_POST["Status"];
    $Company_id=$_POST["Company_id"];

  $sql= mysqli_query($crudies,"INSER INTO mydatabase(ID,Name,Personal_id,Birthday,Phone_number,Address,Postal_Code,Department,Possition,Gender,Status,Company_id,)
  VALUE($employee_id,$Name,$Personal_id,$Birthday,$Phone_number,$Address,$Postal_Code,$Department,$Possition,$Gender,$Status,$Company_id,NOW())");


  if($sql){
    echo "<script>alert('New Record Successfully added!');</script>";
    echo "<script>document.location='home.php';</script>";
  }
  else{
    echo "<script>alert('Ngee nag kess!!');</script>";
  }
}
?>

<?php
    Include "crudies.php";
if (isset ($_POST['submmit'])){

    $ID=$_POST["ID"];
    $Name=$_POST["Name"];
    $Personal_id=$_POST["Personal_id"];
    $Birthday=$_POST["Birthday"];
    $Phone_number=$_POST["Phone_number"];
    $Address=$_POST["Address"];
    $Postal_Code=$_POST["Postal_Code"];
    $Department=$_POST["Department"];
    $Possition=$_POST["Possition"];
    $Gender=$_POST["Gender"];
    $Status=$_POST["Status"];
    $Company_id=$_POST["Company_id"];

  $sql= mysqli_query($crudies,"INSER INTO mydatabase(ID,Name,Personal_id,Birthday,Phone_number,Address,Postal_Code,Department,Possition,Gender,Status,Company_id,)
  VALUE($employee_id,$Name,$Personal_id,$Birthday,$Phone_number,$Address,$Postal_Code,$Department,$Possition,$Gender,$Status,$Company_id,NOW())");

    $result=mysqli_query($con,$sql); 
    if($result){
        die(mysqli_error($con));
    }

}
?>

<?php
    Include 'crudies.php';
if (isset ($_POST['submmit'])){
    $Name=$_POST['Name'];
    $Personal_id=$_POST['Personal_id'];
    $Birthday=$_POST['Birthday'];
    $Phone_number=$_POST['Phone_number'];
    $Address=$_POST['Address'];
    $Postal_Code=$_POST['Postal_Code'];
    $Department=$_POST['Department'];
    $Possition=$_POST['Possition'];
    $Gender=$_POST['Gender'];
    $Status=$_POST['Status'];
    $Company_id=$_POST['Company_id'];

  $sql= mysqli_query("INSER INTO mydatabase(ID,Name,Personal_id,Birthday,Phone_number,Address,Postal_Code,Department,Possition,Gender,Status,Company_id,)
  VALUE($employee_id,$Name,$Personal_id,$Birthday,$Phone_number,$Address,$Postal_Code,$Department,$Possition,$Gender,$Status,$Company_id,NOW())");

    $result=mysqli_query($con,$sql); 
    if($result){
        die(mysqli_error($con));
    }

}
?>