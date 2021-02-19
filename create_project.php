<?php
include 'config.php';
 if(isset($_POST['projectname'])){
    $projectname= $_POST['projectname'];
  }

  if(isset($_POST['orgname'])){
    $orgname= $_POST['orgname'];
  }



$query= "insert into projects_table (Project_name, Organisation_name) values ('$projectname','$orgname')";
$query1="select last_insert_id();";
$result=mysqli_query($dbconnect,$query);
$result1=mysqli_query($dbconnect,$query1);

$ques= $result1->fetch_array();
$ques_id = $ques[0];
echo $ques_id;




?>