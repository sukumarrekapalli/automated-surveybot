<?php
include 'config.php';
if(isset($_POST['textquestion'])){
    $textquestion= $_POST['textquestion'];
  }


  if(isset($_POST['r1'])){
    $r1= $_POST['r1'];
  }else{
     $r1 = "";
  }


  if(isset($_POST['r2'])){
    $r2= $_POST['r2'];
  }else{
     $r2 = "";
  }


  if(isset($_POST['r3'])){
    $r3= $_POST['r3'];
  }else{
     $r3 = "";
  }

  if(isset($_POST['r4'])){
    $r4= $_POST['r4'];
  }else{
     $r4 = "";
  }


  if(isset($_POST['r5'])){
    $r5= $_POST['r5'];
  }else{
     $r5 = "";
  }


  $r1c = '"'.$r1.'"';
  $r2c = '"'.$r2.'"';
  $r3c = '"'.$r3.'"';
  $r4c = '"'.$r4.'"';
  $r5c = '"'.$r5.'"';


  $query= "insert into questions_table (question_text) values ('$textquestion');";
  $query1="select last_insert_id();";
  $result=mysqli_query($dbconnect,$query);
  $result1=mysqli_query($dbconnect,$query1);
  
  $ques= $result1->fetch_array();
  $ques_id = $ques[0];




$question='"'.$textquestion.'"';
  $type='"'."radio".'"';
  $name='"'.$ques_id.'"';

$code ="  <fieldset cf-questions=".$question."  cf-input-placeholder=".'"Please select one of the above options"'.">
         
         <input type=".$type." name=".$name." cf-label=".'"Strongly Agree"'."value=".'"Strongly agree"'."required/>
         <input type=".$type." name=".$name." cf-label=".'"Agree"'." value=".'"Agree"'." />
         <input type=".$type." name=".$name." cf-label=".'"Neither agree nor disagree"'." value=".'"Neither agree nor disagree"'." />
         <input type=".$type." name=".$name." cf-label=".'"Disagree"'." value=".'"Disagree"'." />
         <input type=".$type." name=".$name." cf-label=".'"Strongly Disagree"'." value=".'"Strongly_disagree"'." />
        
       </fieldset>
       
       <cf-robot-message cf-questions=".$r1c." cf-conditional-".$ques_id."=".'"Strongly agree"'."></cf-robot-message>
         
       <cf-robot-message cf-questions=".$r2c." cf-conditional-".$ques_id."=".'"Agree"'."></cf-robot-message>
      
       <cf-robot-message cf-questions=".$r3c." cf-conditional-".$ques_id."=".'"Neither agree nor disagree"'."></cf-robot-message>    
      
         <cf-robot-message cf-questions=".$r4c." cf-conditional-".$ques_id."=".'"Disagree"'."></cf-robot-message>
        
         <cf-robot-message cf-questions=".$r5c." cf-conditional-".$ques_id."=".'"Strongly_disagree"'."></cf-robot-message>

       
       ";
    


   
       $query2= "UPDATE  questions_table SET Questions='".$code."' WHERE id = $ques_id;";
      //  $query= "UPDATE projects_table SET question_list = '".$questionslist."' WHERE id = $projectid;";
       $result=mysqli_query($dbconnect,$query2);
       
       
    
       // $type="text";
       // $name="array[]";
       //   $questioncode = "<input type=".$type."name=".$name." cf-questions='".$textquestion."'>";
       
       //   $query2= "UPDATE questions_table SET Questions ='".$questioncode."' WHERE id = $ques_id;";
       
       // $result2=mysqli_query($dbconnect,$query2);
       
       echo $ques_id;
      

         
         
         
         ?>

