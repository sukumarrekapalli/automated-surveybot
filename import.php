<?php  
 
include 'config.php';
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

    if(isset($_POST['projectid'])){
        $projectid= $_POST['projectid'];
        echo $projectid;
      }



      
           
               $handle = fopen($_FILES['employee_file']['tmp_name'], "r");
               $data = fgetcsv($handle);
            
               while($data = fgetcsv($handle))
               {
                   
                 
            $employee = mysqli_real_escape_string($dbconnect, $data[0]);  
            $employeemail = mysqli_real_escape_string($dbconnect, $data[1]);  
           
                       
                   
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $link= ''; 
            $n = 7;
            for ($j = 0; $j < $n; $j++) { 
                $index = rand(0, strlen($characters) - 1); 
                $link .= $characters[$index]; 
            }
            $query = "  
            INSERT INTO survey_table 
                 (Project_id, Employee_name, Survey_link, Employee_mail)  
                 VALUES ('$projectid', '$employee', '$link', '$employeemail')  
            ";  
            mysqli_query($dbconnect, $query);  





            $mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 465; // TLS only
$mail->SMTPSecure = 'ssl'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = 'info@e2epeoplepractices.com';
$mail->Password = 'Yeshasvinie2epp@25yrs*';
$mail->setFrom('info@e2epeoplepractices.com', 'e2epeoplepractices');
$mail->addAddress($employeemail, 'e2epeoplepractices');
$mail->Subject = 'kaiwa mail';

$baseurl ="https://www.culturelytics.ai/kaiwa-internal/kaiwa-landing.php/";
$appurl = $baseurl.$link;
$mail->msgHTML($appurl);
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->send();
       
               }
             
              
           
          





         $output = '';

           $select = "SELECT * FROM survey_table where Project_id = $projectid";  
           $result = mysqli_query($dbconnect, $select);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          
                          <th width="25%">projectid</th>  
                          <th width="35%">employeename</th>  
                          <th width="10%">link</th>  
                          <th width="20%">mail</th>  
                         
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                         
                          <td>'.$row["Project_id"].'</td>  
                          <td>'.$row["Employee_name"].'</td>  
                          <td>'."<a href =".'"http://localhost:8080/kaiwa-internal/kaiwa-landing.php/'.$row["Survey_link"].'" target ='.'"'."_blank".'">click here to take survey  </a>'.'</td>  
                          <td>'.$row["Employee_mail"].'</td>  
                         
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           echo $output;  
     
 ?>  




