<?php

if (isset($_GET['installpackage-btsync'])) {
        header('Refresh: 2; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-btsync");
}
if (isset($_GET['removepackage-btsync'])) {
        header('Refresh: 2; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-btsync");
}

if (isset($_GET['installpackage-csf'])) {
        header('Refresh: 2; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-csf");
}
if (isset($_GET['removepackage-csf'])) {
        header('Refresh: 2; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-csf");
}

if (isset($_GET['installpackage-plex'])) {
        header('Refresh: 1; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-plex");
}
if(isset($_GET['removepackage-plex'])) {
        header('Refresh: 1; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-plex");
}

if (isset($_GET['installpackage-rapidleech'])) {
        header('Refresh: 2; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-rapidleech");
}
if (isset($_GET['removepackage-rapidleech'])) {
        header('Refresh: 2; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-rapidleech");
}

if (isset($_GET['installpackage-sickrage'])) {
        header('Refresh: 2; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-sickrage");
}
if (isset($_GET['removepackage-sickrage'])) {
        header('Refresh: 2; /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-sickrage");
}

?>
