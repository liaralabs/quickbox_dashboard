<?php

$packages = array(
        'btsync',
        'csf',
        'deluge',
        'plex',
        'rapidleech',
        'sickrage',
        'sonarr',
        'x2go',
        'quassel'
);

foreach ($packages as $ipackage) {
if (isset($_GET['installpackage-'.$ipackage.''])) {
        header('Location: //');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-$ipackage");
}}

foreach ($packages as $rpackage) {
if (isset($_GET['removepackage-'.$rpackage.''])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-$rpackage");
}}

?>
