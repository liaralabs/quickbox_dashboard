<?php

if (isset($_GET['installpackage-btsync'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-btsync");
}
if (isset($_GET['removepackage-btsync'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-btsync");
}

if (isset($_GET['installpackage-csf'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-csf");
}
if (isset($_GET['removepackage-csf'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-csf");
}

if (isset($_GET['installpackage-plex'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-plex");
}
if(isset($_GET['removepackage-plex'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-plex");
}

if (isset($_GET['installpackage-rapidleech'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-rapidleech");
}
if (isset($_GET['removepackage-rapidleech'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-rapidleech");
}

if (isset($_GET['installpackage-sickrage'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/install/installpackage-sickrage");
}
if (isset($_GET['removepackage-sickrage'])) {
        header('Location: /');
        shell_exec("sudo /usr/local/bin/quickbox/package/remove/removepackage-sickrage");
}

?>
