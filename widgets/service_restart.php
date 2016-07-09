<?php
  include ("../inc/config.php")
?>

              <ul class="list-unstyled">
                <?php if (file_exists("/install/.rtorrent.lock")) { ?>
                <li>RTorrent <a href="javascript:;" onclick="location.href='?id=88&servicestart=rtorrent'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.autodlirssi.lock")) { ?>
                <li>iRSSi-AutoDL <a href="javascript:;" onclick="location.href='?id=88&servicestart=irssi'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.deluge.lock")) { ?>
                <li>DelugeD <a href="javascript:;" onclick="location.href='?id=88&servicestart=deluged'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <li>Deluge Web<a href="javascript:;" onclick="location.href='?id=88&servicestart=delugeweb'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.btsync.lock")) { ?>
                <li>BTSync <a href="javascript:;" onclick="location.href='?id=88&servicestart=btsync'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.couchpotato.lock")) { ?>
                <li>CouchPotato <a href="javascript:;" onclick="location.href='?id=88&servicestart=couchpotato'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.jackett.lock")) { ?>
                <li>Jackett <a href="javascript:;" onclick="location.href='?id=88&servicestart=jackett'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <!--
                <?php if (file_exists("/install/.plex.lock")) { ?>
                <li>Plex <a href="javascript:;" onclick="location.href='?id=88&servicestart=plex'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                -->
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
                <li>SickRage <a href="javascript:;" onclick="location.href='?id=88&servicestart=sickrage'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <?php if (file_exists("/install/.sonarr.lock")) { ?>
                <li>Sonarr <a href="javascript:;" onclick="location.href='?id=88&servicestart=sonarr'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                <!--
                <?php if (file_exists("/install/.znc.lock")) { ?>
                <li>ZNC <a href="javascript:;" onclick="location.href='?id=88&servicestart=znc'" class="btn btn-sm btn-default pull-right"><i class="fa fa-refresh text-info"></i> Refresh</a></li>
                <?php } ?>
                -->
              </ul>