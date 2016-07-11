<?php include("../inc/config.php"); ?>

                    <ul class="list-unstyled mb20">
                      <li style="padding:0;margin:0"><p class="info-quote">Services currently running on your system. Restart or Enable/Disable from the Service Controller</p></li>
                      <?php
                      if (file_exists('/install/.rtorrent.lock')) {
                        echo "<li>"; echo "$rval"; echo "</li>";
                      }
                      if (file_exists('/install/.autodlirssi.lock')) {
                        echo "<li>"; echo "$ival"; echo "</li>";
                      }
                      if (file_exists('/install/.deluge.lock')) {
                        echo "<li>"; echo "$dval"; echo "</li>";
                        echo "<li>"; echo "$dwval"; echo "</li>";
                      }
                      if ($username == "$master") {
                        echo "<li>"; echo "$wcval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.btsync.lock')) {
                        echo "<li>"; echo "$bval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.couchpotato.lock')) {
                        echo "<li>"; echo "$cpval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.jackett.lock')) {
                        echo "<li>"; echo "$jval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.plex.lock')) {
                        echo "<li>"; echo "$pval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.quassel.lock')) {
                        echo "<li>"; echo "$qval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.rapidleech.lock')) {
                        echo "<li>"; echo "$rlval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.sickrage.lock')) {
                        echo "<li>"; echo "$srval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.sonarr.lock')) {
                        echo "<li>"; echo "$sval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.x2go.lock')) {
                        echo "<li>"; echo "$xval"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.znc.lock')) {
                        echo "<li>"; echo "$zval"; echo "</li>";
                      }
                      ?>
                    </ul>
