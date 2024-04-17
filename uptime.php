<?php

# Quelle: http://www.4webhelp.net/scripts/php/uptime.php

$uptime = shell_exec("cut -d. -f1 /proc/uptime");
$days = floor($uptime/60/60/24);
$hours = $uptime/60/60%24;
$mins = $uptime/60%60;
$secs = $uptime%60;
echo "This server is up $days days $hours hours $mins minutes and $secs seconds";
?>
