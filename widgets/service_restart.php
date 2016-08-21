<?php
  include ("../inc/config.php")
?>

              <ul class="list-unstyled">
                <?php if (file_exists("/install/.rtorrent.lock")) { ?>
                <li><?php echo "$rval"; ?> RTorrent <a href="javascript:;" onclick="location.href='?id=88&servicestart=rtorrent'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.autodlirssi.lock")) { ?>
                <li><?php echo "$ival"; ?> iRSSi-AutoDL <a href="javascript:;" onclick="location.href='?id=88&servicestart=irssi'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.deluge.lock")) { ?>
                <li><?php echo "$dval"; ?> DelugeD <a href="javascript:;" onclick="location.href='?id=88&servicestart=deluged'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <li><?php echo "$dwval"; ?> Deluge Web<a href="javascript:;" onclick="location.href='?id=88&servicestart=deluge-web'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if ($username == "$master") { ?>
                <li><?php echo "$wcval"; ?> Web Console <a href="javascript:;" onclick="location.href='?id=88&servicestart=shellinabox'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php if (file_exists("/install/.btsync.lock")) { ?>
                <li><?php echo "$bval"; ?> BTSync <a href="javascript:;" onclick="location.href='?id=88&servicestart=btsync'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.couchpotato.lock")) { ?>
                <li><?php echo "$cpval"; ?> CouchPotato <a href="javascript:;" onclick="location.href='?id=88&servicestart=couchpotato'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.jackett.lock")) { ?>
                <li><?php echo "$jval"; ?> Jackett <a href="javascript:;" onclick="location.href='?id=88&servicestart=jackett'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.plex.lock")) { ?>
                <li><?php echo "$pval"; ?> Plex <a href="javascript:;" onclick="location.href='?id=88&servicestart=plex'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.plexpy.lock")) { ?>
                <li><?php echo "$ppval"; ?> PlexPy <a href="javascript:;" onclick="location.href='?id=88&servicestart=plexpy'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.plexrequests.lock")) { ?>
                <li><?php echo "$prval"; ?> Plex Requests <a href="javascript:;" onclick="location.href='?id=88&servicestart=plexrequests'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <!--
                <?php if (file_exists("/install/.quassel.lock")) { ?>
                <li>Quassel <a href="javascript:;" onclick="location.href='?id=88&servicestart=quassel'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                -->
                <!--
                <?php if (file_exists("/install/.rapidleech.lock")) { ?>
                <li>Rapidleech <a href="javascript:;" onclick="location.href='?id=88&servicestart=rapidleech'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                -->
                <?php if (file_exists("/install/.sickrage.lock")) { ?>
                <li><?php echo "$srval"; ?> SickRage <a href="javascript:;" onclick="location.href='?id=88&servicestart=sickrage'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.sonarr.lock")) { ?>
                <li><?php echo "$sval"; ?> Sonarr <a href="javascript:;" onclick="location.href='?id=88&servicestart=sonarr'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.syncthing.lock")) { ?>
                <li><?php echo "$stval"; ?> Syncthing <a href="javascript:;" onclick="location.href='?id=88&servicestart=syncthing'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <!--
                <?php if (file_exists("/install/.znc.lock")) { ?>
                <li>ZNC <a href="javascript:;" onclick="location.href='?id=88&servicestart=znc'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                -->
                <?php } ?>
              </ul>
