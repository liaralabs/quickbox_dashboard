<?php include("../inc/config.php"); ?>

                  <div class="panel-body">
                    <ul class="list-unstyled mb20">
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
                      if ($username == "$master" && file_exists('/install/.btsync.lock')) {
                        echo "<li>"; echo "$bval"; echo "</li>";
                      }
                      ?>
                    </ul>
                  </div>
