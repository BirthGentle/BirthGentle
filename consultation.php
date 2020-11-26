<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$appointment = $_REQUEST['appointment'];

if ((empty($name)||empty($email)||empty($appointment)))
{
    echo "Please fill up all the fields";
}
else
{
    mail("mdsiddiqui17@gmail.com", "appointment day", $appointment, "from: $name<$email>");
    echo "<script type='text/javascript'>alert('appointment timing will be contacted through mail');
    window.history.log(-1)</script>";
}
?>