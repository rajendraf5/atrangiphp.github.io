<?php
  session_start();  
  if (isset($_POST['submit'])) {
  	 $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
  	 $email = $_POST['email'];
  	 $contact = $_POST['contact'];
  	 $msg = $_POST['message'];
  	 	     $to = "princesvishwakarmaf5@gmail.com";
           $subject = "Atrangi Fests CONTACT US";
           $message = "<table>";
           $message .= "<tr>";
           $message .= "<td><strong>First Name</strong></td>";
           $message .= "<td>".$first_name."</td>";
           $message .= "</tr>";
           // $message .= "<tr>";
           // $message .= "<td><strong>Last Name</strong></td>";
           // $message .= "<td>".$last_name."</td>";
           // $message .= "</tr>";
           $message .= "<tr>";
           $message .= "<td><strong>Email</strong></td>";
           $message .= "<td>".$email."</td>";
           $message .= "</tr>";
           $message .= "<tr>";
           $message .= "<td><strong>Contact Number</strong></td>";
           $message .= "<td>".$contact."</td>";
           $message .= "</tr>";
           $message .= "<tr>";
           $message .= "<td><strong>Message</strong></td>";
           $message .= "<td>".$msg."</td>";
           $message .= "</tr>";
           $message .= "</table>";
         
           $header = "From:princesvishwakarmaf5@gmail.com \r\n";
           //$header .= "Bcc:rahul.bhatt@ozonesoftsolutions.com \r\n";
           $header .= "MIME-Version: 1.0\r\n";
           $header .= "Content-type: text/html\r\n";
           
           $retval = mail ($to,$subject,$message,$header);
           
           if( $retval == true ) {
              $_SESSION['msg'] = "Mail Send successully";
              header("location:index.php");
           }else {
              $_SESSION['errormsg'] = "Mail could not be sent...";
              header("location:index.php");
           }
  }

?>