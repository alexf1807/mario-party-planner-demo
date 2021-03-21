<?php

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$_SESSION = [];
session_start() ;
session_destroy() ; 

header('cache-control: no-cache,no-store,must-revalidate'); // HTTP 1.1.
header('pragma: no-cache'); // HTTP 1.0.
header('expires: 0'); // Proxies.
header("Location: ../index.php?logout=successful");