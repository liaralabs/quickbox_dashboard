<?php
if (isset($_GET['clean_mem'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/system/clean_mem");
}
?>
