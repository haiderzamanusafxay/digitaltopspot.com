<?php
// if (isset($_POST['submit'])) {
    
//     $to = "digitaltopspot1@gmail.com";
//     $email= $_POST['email'];
//     $subject= "Website Email From :". $email;
//     $name= $_POST['name'];
//     $message= $_POST['message'];
//     $header= "From ".$email;

//     $result= mail($to, $subject,$message,$header);
//     if($result){
//         header('index.php');
//     }

// }
      $to = "digitaltopspot1@gmail.com";
    //   $email= $_POST['email'];
    //   $name= $_POST['name'];
    //   $message= $_POST['message'];
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name digitaltopspot.com' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      $subject= "new website email";
      $message= "hey";

      $res= mail($to,$subject,$message);
      if($res){
        echo "success";
      }else{
        echo "failed";
      }

?>