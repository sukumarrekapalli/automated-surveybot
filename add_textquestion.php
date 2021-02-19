<?php
include 'config.php';
if(isset($_POST['textquestion'])){
    $textquestion= $_POST['textquestion'];
  }

  
$query= "insert into questions_table (question_text) values ('$textquestion');";
$query1="select last_insert_id();";
$result=mysqli_query($dbconnect,$query);
$result1=mysqli_query($dbconnect,$query1);

$ques= $result1->fetch_array();
$ques_id = $ques[0];

  $question='"'.$textquestion.'"';
  $type='"'."text".'"';
  $name='"'.$ques_id.'"';
  
    $questioncode = "<input type=".$type."name=".$name." cf-questions=".$question.">";
  
    $query2= "UPDATE questions_table SET Questions ='".$questioncode."' WHERE id = $ques_id;";
$result2=mysqli_query($dbconnect,$query2);



// $type="text";
// $name="array[]";
//   $questioncode = "<input type=".$type."name=".$name." cf-questions='".$textquestion."'>";

//   $query2= "UPDATE questions_table SET Questions ='".$questioncode."' WHERE id = $ques_id;";

// $result2=mysqli_query($dbconnect,$query2);

echo $ques_id;

  ?>
