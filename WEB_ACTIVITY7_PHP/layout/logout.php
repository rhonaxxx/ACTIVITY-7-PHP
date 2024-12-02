<?php
    session_start();
    session_unset();
    session_destroy();
    header('loacation:../?logout=true');
    exit();
?>