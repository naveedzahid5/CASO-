<?php

if (isset($_POST['submit'])){
    $name = $_POST['Name'];
     $mailFrom = $_POST['Email'];
     $message = $_POST['Message'];
    
    $mailTo = "team.caso@gmail.com";
    $headers = " from: ".$mailFrom;
    $txt = "You have Received an e-mail from" .$name.".\n\n".$message;
    
    mail($mailTo,$txt, $headers);
    header("Location: index.php?mailsend");
}