<?php
echo exec("cd /home/henior/domains/henior.kefir.ovh/public_html; git pull --rebase --autostash")
?>
<br>
<?php
echo "user domain: " . $_SERVER['REMOTE_ADDR']
?>