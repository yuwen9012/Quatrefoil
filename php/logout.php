<?php
session_start();
session_destroy();

header("Location: ../front_end/login.php");
exit();
?>
