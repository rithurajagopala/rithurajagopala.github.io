<?php
if($_POST["name"]) {
    mail("viks.deepak@gmail.com", "Form to email message", $_POST["name"], "From: an@email.address");
}
?>