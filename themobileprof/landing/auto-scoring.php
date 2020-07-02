<?php
header("HTTP/1.1 301 Moved Permanently");
if (!empty($_REQUEST['target'])){
    header("Location: http://themobileprof.com/landing/auto-scoring.php?target=NG");
} else {
    header("Location: http://themobileprof.com/landing/auto-scoring.php");
}
header("Connection: close");
?>
