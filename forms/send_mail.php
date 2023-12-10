<?php
if(isset($_POST['submit']))
{
    $to= 'rupak@gmail.com';
    $name=$_POST['fname'];
    $email= $_POST['email'];
     $subject=$_POST['subject'].$name;
     $message=$_POST['message'];
     $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers))
    {
        echo "feedback sent";
    }

    else{
        echo "Not sent";
    }

}
?>
<h2>
    <a href= "contact.php">Return</a>
</h2>