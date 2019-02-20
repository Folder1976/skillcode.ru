<?php

 $data = $_POST;
 
 if(!$data){
    header('Location: //skillcode.ru');
 }

 $to = "folder.list@gmail.com";
 $name = isset($data['name']) ? $data['name'] : 'Подписка';
 $fromMail = $data['email'];
 $subject = isset($data['subject']) ? $data['subject'] : 'SkillCode подписка';
 $message = isset($data['message']) ? $data['message'] : 'Подписка '.$data['email'];

 mail($to,$subject,$message, $fromMail);

?>

<?php include 'head.php';?>
<?php include 'content-mail.php';?>
<?php include 'footer.php';?>
