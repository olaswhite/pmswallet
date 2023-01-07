<?php
@session_start();

echo "<script>window.location.href='../../view/userAuth/login';</script>";
@session_destroy();
?>