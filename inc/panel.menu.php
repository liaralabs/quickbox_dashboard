<?php
  $current_vs = "<span id=\"version-result\"></span>";
?>
<body class="body ps-container">
<header>
  <div class="headerpanel">
    <div class="logopanel">
      <h2><a href="#"><img src="/img/logo.png" alt="QuickBox Seedbox" class="logo-image" height="50" /></a></h2>
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
              <ul class="dropdown-menu pull-right">
                <li><span style="margin-top:5x"></span></li>
                <li><a href="https://plaza.quickbox.io/c/quickbox-support" target="_blank"><i class="fa fa-warning text-warning"></i> Report an issue </a></li>
                <li><a href="https://quickbox.io/donate" target="_blank"><i class="fa fa-heart text-danger"></i> Donate </a></li>
                <div class="usermenu-div"></div>
                <li style="border-bottom:1px solid #3a3a3a"><pre style="font-size:10px; color: #aaa; padding-bottom:4px">QuickBox Version :: <?php echo "$version"; ?></pre></li>
                <!--li><pre style="font-size:10px; color: #ccc">Current Version   :: <?php echo "$current_vs"; ?></pre></li-->
                <?php if ($username == "$master"){
                  //if ($current_vs > $version){
                    echo "<li><a href=\"?updateQuickBox=true\" data-toggle=\"modal\" data-target=\"#sysResponse\" style=\"\"><i class=\"fa fa-bell text-success\"></i> Check for updates </a></li>";
                  //}
                }
                ?>
                </span></li>
                <!--li><span style="font-size:10px;">courtesy of <b><a href="https://swizards.net" target="_blank" rel="noindex,nofollow">swizards.net</a></b></li-->
              </ul>
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
            <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="/rutorrent" target="_blank"><i class="fa fa-share"></i> <span>ruTorrent</span></a></li>
            <?php if (file_exists('/install/.btsync.lock') && ($username == "$master")) { echo "<li><a href=\"$btsyncURL\" target=\"_blank\"><i class=\"fa fa-retweet\"></i> <span>BTSync</span></a></li>"; } ?>
            <?php if (file_exists('/install/.plex.lock') && ($username == "$master")) { echo "<li><a href=\"$plexURL\" target=\"_blank\"><i class=\"fa fa-play\"></i> <span>Plex</span></a></li>"; } ?>
            <?php if (file_exists('/install/.rapidleech.lock') && ($username == "$master")) { echo "<li><a href=\"$rapidleechURL\" target=\"_blank\"><i class=\"fa fa-share-alt\"></i> <span>Rapidleech</span></a></li>"; } ?>
            <?php if (file_exists('/install/.sickrage.lock') && ($username == "$master")) { echo "<li><a href=\"$sickrageURL\" target=\"_blank\"><i class=\"fa fa-television\"></i> <span>SickRage</span></a></li>"; } ?>
            <li class="nav-parent">
              <a href=""><i class="fa fa-download"></i> <span>Downloads</span></a>
              <ul class="children">
                <li><a href="/<?php echo "$username"; ?>.downloads" target="_blank">ruTorrent</a></a></li>
              </ul>
            </li>
            <li><a href="?reload=true"><i class="fa fa-refresh"></i> <span>Reload Services</span></a></li>
            <?php
            if ($username == "$master"){
            echo "<li><a href=\"/$username.console\"><i class=\"fa fa-keyboard-o\"></i> <span>Web Console</span></a></li>";
            echo "<li class=\"nav-parent\"> <a href=\"\"><i class=\"fa fa-cubes\"></i> <span>Packages</span></a>";
              echo "<ul class=\"children\">";
                echo "<li class=\"info-quote\"><p class=\"info-quote\">Easily install and uninstall any software package simply by clicking on the software package name</p></li>";
                echo "<li class=\"warning-quote\"><p class=\"warning-quote\">Please be advised that these options are not the same as enabling and disabling a software package. These options are designed to either install or uninstall.</p></li>";

                echo "<li>";
                if (file_exists("/install/.btsync.lock")) {
                  echo "<a href=\"javascript:void()\" data-toggle=\"modal\" data-target=\"#btsyncRemovalConfirm\">BTSync  <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-installed.png\"></span></a>";
                } else {
                  echo "<a href=\"?installpackage-btsync=true\" data-toggle=\"modal\" data-target=\"#sysResponse\" id=\"btsyncInstall\">BTSync  <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-notinstalled.png\"></span></a>";
                }
                echo "</li>";
                //echo "<li>";
                //if (file_exists("/install/.csf.lock")) {
                //  echo "<a href=\"javascript:void()\" data-toggle=\"modal\" data-target=\"#csfRemovalConfirm\">CSF  <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-installed.png\"></span></a>";
                //} else {
                //  echo "<a href=\"?installpackage-csf=true\" id=\"csfInstall\">CSF  <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-notinstalled.png\"></span></a>";
                //}
                //echo "</li>";
                echo "<li>";
                if (file_exists('/install/.plex.lock')) {
                  echo "<a href=\"javascript:void()\" data-toggle=\"modal\" data-target=\"#plexRemovalConfirm\">Plex Media Server  <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-installed.png\"></span></a>";
                } else {
                  echo "<a href=\"?installpackage-plex=true\" data-toggle=\"modal\" data-target=\"#sysResponse\" id=\"plexInstall\">Plex Media Server  <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-notinstalled.png\"></span></a>";
                }
                echo "</li>";
                echo "<li>";
                if (file_exists("/install/.rapidleech.lock")) {
                  echo "<a href=\"javascript:void()\" data-toggle=\"modal\" data-target=\"#rapidleechRemovalConfirm\">Rapidleech <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-installed.png\"></span></a>";
                } else {
                  echo "<a href=\"?installpackage-rapidleech=true\" data-toggle=\"modal\" data-target=\"#sysResponse\" id=\"rapidleechInstall\">Rapidleech  <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-notinstalled.png\"></span></a>";
                }
                echo "</li>";
                echo "<li>";
                if (file_exists("/install/.sickrage.lock")) {
                  echo "<a href=\"javascript:void()\" data-toggle=\"modal\" data-target=\"#sickrageRemovalConfirm\">SickRage <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-installed.png\"></span></a>";
                } else {
                  echo "<a href=\"?installpackage-sickrage=true\" data-toggle=\"modal\" data-target=\"#sysResponse\" id=\"sickrageInstall\">SickRage  <span class=\"pull-right plgin-center-switch\"><img src=\"img/switch-notinstalled.png\"></span></a>";
                }
                echo "</li>";

              echo "</ul>";
            echo "</li>";
            } ?>
          </ul>
        </div><!-- tab pane -->

        <!-- ######################## HELP MENU TAB ##################### -->
        <div class="tab-pane" id="help">
          <h5 class="sidebar-title">Quick System Tips</h5>
          <?php
          if ($username == "$master"){
          echo "<ul class=\"nav nav-pills nav-stacked nav-quirk nav-mail\">";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">disktest</span><br/>";
            echo "<small>Type this command to perform a quick r/w test of your disk.</small></li>";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">fixhome</span><br/>";
            echo "<small>Type this command to quickly adjusts /home directory permissions.</small></li>";
          echo "</ul>";
          echo "<h5 class=\"sidebar-title\">Admin Commands</h5>";
          echo "<ul class=\"nav nav-pills nav-stacked nav-quirk nav-mail\">";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">setdisk</span><br/>";
            echo "<small>Type this command in ssh to allocate the amount of disk space you would like to give to a user.</small></li>";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">createSeedboxUser</span><br/>";
            echo "<small>Type this command in ssh to create a new seedbox user on your server.</small></li>";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">deleteSeedboxUser</span><br/>";
            echo "<small>Type this command in ssh to delete a seedbox user on your server. You will need to enter the users account name, you will be prompted.</small></li>";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">changeUserpass</span><br/>";
            echo "<small>Typing this command in ssh allows you to change a disired users password.</small></li>";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">sudo -u [username] reload</span><br/>";
            echo "<small>Type this command in ssh to reload all services on a specific users seedbox. These services include rTorrent and IRSSI only.</small></li>";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">upgradeBTSync</span><br/>";
            echo "<small>Type this command in ssh to upgrade BTSync to newest version when available.</small></li>";
            echo "<li style=\"padding: 7px\"><span style=\"font-size: 12px; color:#eee\">clean_mem</span><br/>";
            echo "<small>Use the above command as root if/when you decide to clear your systems Physical Memory Cache</small></li>";
          echo "</ul>";
          echo "<h5 class=\"sidebar-title\">Essential User Commands</h5>";
          } ?>
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
