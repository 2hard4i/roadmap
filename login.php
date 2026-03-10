<?php
$correct_password = "12345";

if($_POST["password"] === $correct_password){
    echo "Access granted";
} else {
    echo "Wrong password";
}
?>
