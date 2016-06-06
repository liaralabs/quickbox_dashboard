<?php

$packages = array(
        'btsync',
        'csf',
        'plex',
        'rapidleech',
        'sickrage'
);

foreach ($packages as $package) {
if (isset($_GET['installpackage-'.$package.''])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-$package");
}}

foreach ($packages as $package) {
if (isset($_GET['removepackage-'.$package.''])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-$package");
}}

?>
