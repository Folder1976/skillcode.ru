<?php
 $data = $_POST;

 $to = "vlehayrapetyan77@gmail.com";
 $name = $data['name'];
 $fromMail = $data['email'];
 $subject = $data['subject'];
 $message = $data['message'];

 mail($to,$name,$fromMail, $subject, $message);

?>