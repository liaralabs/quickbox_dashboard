<?php
  include ("../inc/config.php")
?>

              <ul class="list-unstyled mb20">
                <?php
                if (file_exists('/install/.rtorrent.lock')) {
                  echo "<li>"; echo "$cbodyr"; echo "</li>";
                }
                if (file_exists('/install/.autodlirssi.lock')) {
                  echo "<li>"; echo "$cbodyi"; echo "</li>";
                }
                if (file_exists('/install/.deluge.lock')) {
                  echo "<li>"; echo "$cbodyd"; echo "</li>";
                  echo "<li>"; echo "$cbodydw"; echo "</li>";
                }
                if ($username == "$master") {
                  echo "<li>"; echo "$wcbodyb"; echo "</li>";
                }
                if ($username == "$master" && file_exists('/install/.btsync.lock')) {
                  echo "<li>"; echo "$cbodyb"; echo "</li>";
                }
                if ($username == "$master" && file_exists('/install/.couchpotato.lock')) {
                  echo "<li>"; echo "$cbodycp"; echo "</li>";
                }
                if ($username == "$master" && file_exists('/install/.jackett.lock')) {
                  echo "<li>"; echo "$cbodyj"; echo "</li>";
                }
                if ($username == "$master" && file_exists('/install/.plex.lock')) {
                  echo "<li>"; echo "$cbodyp"; echo "</li>";
                }
                if ($username == "$master" && file_exists('/install/.plexpy.lock')) {
                  echo "<li>"; echo "$cbodypp"; echo "</li>";
                }
                if ($username == "$master" && file_exists('/install/.plexrequests.lock')) {
                  echo "<li>"; echo "$cbodypr"; echo "</li>";
                }
                //if ($username == "$master" && file_exists('/install/.quassel.lock')) {
                //  echo "<li>"; echo "$cbodyq"; echo "</li>";
                //}
                //if ($username == "$master" && file_exists('/install/.rapidleech.lock')) {
                //  echo "<li>"; echo "$cbodyrl"; echo "</li>";
                //}
                if ($username == "$master" && file_exists('/install/.sickrage.lock')) {
                  echo "<li>"; echo "$cbodysr"; echo "</li>";
                }
                if ($username == "$master" && file_exists('/install/.sonarr.lock')) {
                  echo "<li>"; echo "$cbodys"; echo "</li>";
                }
                //if ($username == "$master" && file_exists('/install/.x2go.lock')) {
                //  echo "<li>"; echo "$cbodyx"; echo "</li>";
                //}
                //if ($username == "$master" && file_exists('/install/.znc.lock')) {
                //  echo "<li>"; echo "$cbodyz"; echo "</li>";
                //}
                ?>
              </ul>
