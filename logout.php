<?php 
    require_once("functions.php");
    setcookie("SID", "", time() - 86400); 
    setcookie("X","",time()-86400);
    header("Location: $base_url");
?>