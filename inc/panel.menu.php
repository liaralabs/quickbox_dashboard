<?php
  $current_vs = "<span id=\"version-result\"></span>";
?>
<body class="body">
<header>
  <div class="headerpanel">
    <div class="logopanel">
      <h2><?php include("db/branding-l.php"); ?></h2>
    </div><!-- logopanel -->
    <div class="headerbar">
      <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-logged" data-toggle="dropdown">
                <?php echo "$username"; ?>
                <span class="caret"></span>
              </button>
              <?php include("db/branding-m.php"); ?>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->
    </div><!-- headerbar -->
  </div><!-- header-->
</header>
<section>
  <div class="leftpanel ps-container">
    <div class="leftpanelinner">
      <ul class="nav nav-tabs nav-justified nav-sidebar">
        <li class="tooltips active" data-toggle="tooltip" title="Main Menu" data-placement="bottom"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h"></i></a></li>
        <?php
        if ($username == "$master"){
          echo "<li class=\"tooltips\" data-toggle=\"tooltip\" title=\"ruTorrent Plugins Menu\" data-placement=\"bottom\"><a data-toggle=\"tab\" data-target=\"#plugins\"><i class=\"tooltips fa fa-puzzle-piece\"></i></a></li>";
        }
        ?>
        <li class="tooltips" data-toggle="tooltip" title="Help Commands & More" data-placement="bottom"><a data-toggle="tab" data-target="#help"><i class="tooltips fa fa-question-circle"></i></a></li>
      </ul>
      <div class="tab-content">
        <!-- ################# MAIN MENU ################### -->
        <div class="tab-pane active" id="mainmenu">
          <h5 class="sidebar-title">Main Menu</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <!--li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li-->
            <li><a class="grayscale" href="/rutorrent" target="_blank"><img src="img/brands/rtorrent.png" class="brand-ico"> <span>ruTorrent</span></a></li>
            <?php if (processExists("deluge-web",$username) && file_exists('/install/.deluge.lock')) { ?>
              <li><a class="grayscale" href="<?php echo "$dwURL"; ?>" target="_blank"><img src="img/brands/deluge.png" class="brand-ico"> <span>Deluge Web</span></a></li>
            <?php } ?>
            <?php if ($username == "$master") { ?>
              <?php if (file_exists('/install/.btsync.lock')) { ?>
                <li><a class="grayscale" href="<?php echo "$btsyncURL"; ?>" target="_blank"><img src="img/brands/btsync.png" class="brand-ico"> <span>BTSync</span></a></li>
              <?php } ?>
              <?php if (file_exists('/install/.plex.lock')) { ?>
                <li><a class="grayscale" href="<?php echo "$plexURL"; ?>" target="_blank"><img src="img/brands/plex.png" class="brand-ico"> <span>Plex</span></a></li>
              <?php } ?>
              <?php if (file_exists("/install/.plexpy.lock")) { ?>
                <li><a class="grayscale" href="<?php echo "$plexpyURL"; ?>" target="_blank"><img src="img/brands/plexpy.png" class="brand-ico"> <span>PlexPy</span></a></li>
              <?php } ?>
              <?php if (file_exists("/install/.plexrequests.lock")) { ?>
                <li><a class="grayscale" href="<?php echo "$plexrequestsURL"; ?>" target="_blank"><img src="img/brands/plexrequests-net.png" class="brand-ico"> <span>Plex Requests.NET</span></a></li>
              <?php } ?>
              <?php if (file_exists('/install/.rapidleech.lock')) { ?>
                <li><a class="grayscale" href="<?php echo "$rapidleechURL"; ?>" target="_blank"><img src="img/brands/rapidleech.png" class="brand-ico"> <span>Rapidleech</span></a></li>
              <?php } ?>
              <?php if (file_exists('/install/.couchpotato.lock')) { ?>
                <li><a class="grayscale" href="<?php echo "$cpURL"; ?>" target="_blank"><img src="img/brands/couchpotato.png" class="brand-ico"> <span>CouchPotato</span></a></li>
              <?php } ?>
              <?php if (file_exists('/install/.sickrage.lock')) { ?>
                <li><a class="grayscale" href="<?php echo "$sickrageURL"; ?>" target="_blank"><img src="img/brands/sickrage.png" class="brand-ico"> <span>SickRage</span></a></li>
              <?php } ?>
              <?php if (processExists("nzbdrone",$username) && file_exists('/install/.sonarr.lock')) { ?>
                <li><a class="grayscale" href="<?php echo "$sonarrURL"; ?>" target="_blank"><img src="img/brands/sonarr.png" class="brand-ico"> <span>Sonarr</span></a></li>
              <?php } ?>
              <?php if (file_exists('/install/.jackett.lock')) { ?>
                <li><a class="grayscale" href="<?php echo "$jackettURL"; ?>" target="_blank"><img src="img/brands/jackett.png" class="brand-ico"> <span>Jackett</span></a></li>
              <?php } ?>
              <?php if (file_exists('/install/.znc.lock')) { ?>
                <li><a class="grayscale" href="<?php echo "$zncURL"; ?>" target="_blank"><img src="img/brands/znc.png" class="brand-ico"> <span>ZNC</span></a></li>
              <?php } ?>
            <?php } ?>
            <li class="nav-parent">
              <a href=""><i class="fa fa-download"></i> <span>Downloads</span></a>
              <ul class="children">
                <li><a href="/<?php echo "$username"; ?>.rtorrent.downloads" target="_blank">ruTorrent</a></a></li>
                <?php if (processExists("deluge-web",$username)) { ?>
                  <li><a href="/<?php echo "$username"; ?>.deluge.downloads" target="_blank">Deluge</a></li>
                <?php } ?>
              </ul>
            </li>
            <!--li><a href="?reload=true"><i class="fa fa-refresh"></i> <span>Reload Services</span></a></li-->
            <?php if (processExists("shellinabox",shellinabox) && ($username == "$master")) { ?>
            <li><a href="/<?php echo "$username"; ?>.console" target="_blank"><i class="fa fa-keyboard-o"></i> <span>Web Console</span></a></li>
            <?php } ?>
          </ul>
        </div><!-- tab pane -->

        <!-- ######################## HELP MENU TAB ##################### -->
        <div class="tab-pane" id="help">
          <h5 class="sidebar-title">Quick System Tips</h5>
          <?php if ($username == "$master") { ?>
          <ul class="nav nav-pills nav-stacked nav-quirk nav-mail">
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">disktest</span><br/>
              <small>Type this command to perform a quick r/w test of your disk.</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">fixhome</span><br/>
              <small>Type this command to quickly adjusts /home directory permissions.</small>
            </li>
          </ul>
          <h5 class="sidebar-title">Admin Commands</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk nav-mail">
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">setdisk</span><br/>
              <small>Type this command in ssh to allocate the amount of disk space you would like to give to a user.</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">createSeedboxUser</span><br/>
              <small>Type this command in ssh to create a new seedbox user on your server.</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">deleteSeedboxUser</span><br/>
              <small>Type this command in ssh to delete a seedbox user on your server. You will need to enter the users account name, you will be prompted.</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">changeUserpass</span><br/>
              <small>Typing this command in ssh allows you to change a disired users password.</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">sudo -u [username] reload</span><br/>
              <small>Type this command in ssh to reload all services on a specific users seedbox. These services include rTorrent and IRSSI only.</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">showspace</span><br/>
              <small>Use the above command as root to show the amount of disk space currently used by each user</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">upgradeBTSync</span><br/>
              <small>Type this command in ssh to upgrade BTSync to newest version when available.</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">upgradePlex</span><br/>
              <small>Type this command in ssh to upgrade Plex to newest version when available.</small>
            </li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">clean_mem</span><br/>
              <small>Use the above command as root if/when you decide to clear your systems Physical Memory Cache</small>
            </li>
          </ul>
          <?php } ?>
          <h5 class="sidebar-title">Essential User Commands</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk nav-mail">
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">reload</span><br/>
            <small>allows user to reload their services (rtorrent and irssi)</small></li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">screen -fa -dmS rtorrent rtorrent</span><br/>
            <small>allows user to restart/remount rtorrent from SSH</small></li>
            <li style="padding: 7px"><span style="font-size: 12px; color:#eee">screen -fa -dmS irssi irssi</span><br/>
            <small>allows user to restart/remount irssi from SSH</small></li>
          </ul>
        </div><!-- tab-pane -->

        <!-- ######################## RUTORRENT PLUGINS TAB ##################### -->
        <div class="tab-pane" id="plugins">
          <h5 class="sidebar-title">Plugin Menu</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <li class="nav-parent nav-active">
              <a href=""><i class="fa fa-puzzle-piece"></i> <span>Plugins</span></a>
              <ul class="children">
                <li class="info-quote"><p class="info-quote">Easily install and uninstall ruTorrent plugins simply by clicking on the plugin name</p></li>
                <?php
                foreach ($plugins as $plugin) {
                echo "<li>";
                  if (file_exists('/srv/rutorrent/plugins/'.$plugin.'/plugin.info')) {
                    echo "<a href=\"?removeplugin-$plugin=true\" data-toggle=\"modal\" data-target=\"#sysResponse\" >$plugin <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-installed.png\"></span></a>";
                  } else {
                    echo "<a href=\"?installplugin-$plugin=true\" data-toggle=\"modal\" data-target=\"#sysResponse\" >$plugin <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-notinstalled.png\"></span></a>";
                  }
                echo "</li>";
                }
                ?>
              </ul>
            </li>
          </ul>
        </div><!-- tab-pane -->

      </div><!-- tab-content -->
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
