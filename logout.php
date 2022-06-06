<?php
    session_start();
    if(session_destroy()) {
        header("Location: ../griya_jepun/index.php");
    }
?>