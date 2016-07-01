<?php
  include("inc/config.php");
  include("inc/panel.header.php");
  include("inc/panel.menu.php");
?>

  <div class="mainpanel">
    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->
    <div class="contentpanel">

      <div class="row">
        <div class="col-sm-12 col-md-8">

            <div class="row">

              <div class="col-sm-12 col-md-7">
                <div class="panel panel-default list-announcement">
                  <ul class="panel-options">
                    <li><a class="panel-minimize" style="color:#222"><i class="fa fa-chevron-down"></i></a></li>
                    <li><a class="panel-remove"><i class="fa fa-close text-danger"></i></a></li>
                  </ul>
                  <div class="panel-heading">
                    <h4 class="panel-title">Service Status</h4>
                  </div>
                  <div class="panel-body">
                    <div id="servstat"></div>
                  </div>
                  <div class="panel-footer"></div>
                </div>
              </div>
              <div class="col-sm-12 col-md-5">
                <div class="panel panel-default list-announcement">
                  <ul class="panel-options">
                    <li><a class="panel-minimize" style="color:#222"><i class="fa fa-chevron-down"></i></a></li>
                    <li><a class="panel-remove"><i class="fa fa-close text-danger"></i></a></li>
                  </ul>
                  <div class="panel-heading">
                    <h4 class="panel-title">Service Controller</h4>
                  </div>
                  <div class="panel-body">
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
                      if ($username == "$master" && file_exists('/install/.btsync.lock')) {
                        echo "<li>"; echo "$cbodyb"; echo "</li>";
                      }
                      if ($username == "$master" && file_exists('/install/.sonarr.lock')) {
                        echo "<li>"; echo "$cbodys"; echo "</li>";
                      }
                      ?>
                    </ul>
                  </div>
                  <div class="panel-footer"></div>
                </div>
              </div>

            </div>
            <?php if ($username == "$master") { ?>
            <div class="panel panel-inverse">
              <ul class="panel-options">
                <li><a class="panel-minimize"><i class="fa fa-chevron-down"></i></a></li>
                <li><a class="panel-remove"><i class="fa fa-close text-danger"></i></a></li>
              </ul>
              <div class="panel-heading min">
                <h4 class="panel-title">Package Management Center</h4>
              </div>
              <div class="panel-body text-center" style="padding:0; display:none">
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Heads Up!</strong> Please be advised that these options are not the same as enabling and disabling a software package. These options are designed to either install or uninstall.
                </div>
                <div class="table-responsive ps-container">
                  <table id="dataTable1" class="table table-bordered table-striped-col" style="font-size: 12px">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Availability</th>
                      </tr>
                    </thead>

                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Availability</th>
                      </tr>
                    </tfoot>

                    <tbody>
                      <tr>
                        <td>BTSync</td>
                        <td>BitTorrent Sync by BitTorrent, Inc is a proprietary peer-to-peer file synchronization tool.</td>
                        <?php if (file_exists("/install/.btsync.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#btsyncRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-btsync=true" data-toggle="modal" data-target="#sysResponse" id="btsyncInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>CouchPotato</td>
                        <td>Download movies automatically, easily and in the best quality as soon as they are released, via usenet or torrents.</td>
                        <?php if (file_exists("/install/.couchpotato.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#couchpotatoRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-couchpotato=true" data-toggle="modal" data-target="#sysResponse" id="couchpotatoInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>Deluge</td>
                        <td>Deluge is a lightweight, Free Software, cross-platform BitTorrent client.</td>
                        <?php if (file_exists("/install/.deluge.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#delugeRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-deluge=true" data-toggle="modal" data-target="#sysResponse" id="delugeInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>Jackett</td>
                        <td>API Support for your favorite private trackers.</td>
                        <?php if (file_exists("/install/.jackett.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#jackettRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-jackett=true" data-toggle="modal" data-target="#sysResponse" id="jackettInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>Plex</td>
                        <td>Plex let's you stream your content to any Plex enabled device.</td>
                        <?php if (file_exists("/install/.plex.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#plexRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-plex=true" data-toggle="modal" data-target="#sysResponse" id="plexInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>Quassel</td>
                        <td>Quassel IRC is a modern, cross-platform, distributed IRC client based on the Qt4 framework.</td>
                        <?php if (file_exists("/install/.quassel.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#quasselRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-quassel=true" data-toggle="modal" data-target="#sysResponse" id="quasselInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>Quotas</td>
                        <td>This feature of Linux allows the system administrator to allocate a maximum amount of disk space a user or group may use.</td>
                        <?php if (file_exists("/install/.quota.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#quotaRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-quota=true" data-toggle="modal" data-target="#sysResponse" id="quotaInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>Rapidleech</td>
                        <td>Rapid Leech is a free server transfer script for use on various popular upload/download sites such as uploaded.net, Rapidshare.com and more than 120 others.</td>
                        <?php if (file_exists("/install/.rapidleech.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#rapidleechRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-rapidleech=true" data-toggle="modal" data-target="#sysResponse" id="rapidleechInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>SickRage</td>
                        <td>Video File Manager for TV Shows, It watches for new episodes of your favorite shows and when they are posted it does its magic.</td>
                        <?php if (file_exists("/install/.sickrage.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#sickrageRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-sickrage=true" data-toggle="modal" data-target="#sysResponse" id="sickrageInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>Sonarr</td>
                        <td>Sonarr is a tv series management tool which will work with both torrents and usenet.</td>
                        <?php if (file_exists("/install/.sonarr.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#sonarrRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-sonarr=true" data-toggle="modal" data-target="#sysResponse" id="sonarrInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>x2Go</td>
                        <td>X2Go is an open source remote desktop software for Linux that uses the NX technology protocol.</td>
                        <?php if (file_exists("/install/.x2go.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#x2goRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-x2go=true" data-toggle="modal" data-target="#sysResponse" id="x2goInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td>ZNC</td>
                        <td>ZNC is an IRC network bouncer or BNC. It can detach the client from the actual IRC server, and also from selected channels.</td>
                        <?php if (file_exists("/install/.znc.lock")) { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="javascript:void()" data-toggle="modal" data-target="#zncRemovalConfirm" class="btn btn-xs btn-success">Installed</a></td>
                        <?php } else { ?>
                          <td style="vertical-align: middle; text-align: center"><a href="?installpackage-znc=true" data-toggle="modal" data-target="#sysResponse" id="zncInstall" class="btn btn-xs btn-info">Install</a></td>
                        <?php } ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- package center panel -->
            <?php } ?>

            <div class="panel panel-inverse">
              <ul class="panel-options">
                <li><a class="panel-minimize"><i class="fa fa-chevron-down"></i></a></li>
                <li><a class="panel-remove"><i class="fa fa-close text-danger"></i></a></li>
              </ul>
              <div class="panel-heading">
                <h4 class="panel-title">Bandwidth Data</h4>
              </div>
              <div class="panel-body text-center" style="padding:0">
                <div id="mainbw" style="width:100%;height:350px;"></div>
              </div>
              <div class="row panel-footer panel-statistics">
                <div class="col-sm-12">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered nomargin">
                      <thead>
                        <tr>
                          <th style="width:33%">Network</th>
                          <th style="width:33%">Upload</th>
                          <th style="width:33%">Download</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (false !== ($strs = @file("/proc/net/dev"))) : ?>
                        <?php for ($i = 2; $i < count($strs); $i++ ) : ?>
                        <?php preg_match_all( "/([^\s]+):[\s]{0,}(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)/", $strs[$i], $info );?>
                        <tr>
                          <td style="font-size:14px;font-weight:bold"><?php echo $info[1][0]?></td>
                          <td style="font-size:14px;"><span class="text-success"><span id="NetOutSpeed<?php echo $i?>">0B/s</span></span></td>
                          <td style="font-size:14px;"><span class="text-primary"><span id="NetInputSpeed<?php echo $i?>">0B/s</span></span></td>
                        </tr>
                        <?php endfor; ?>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div><!-- col-sm-12 -->
              </div>
            </div>
            <//?php if ($username == "$master") { ?>
            <div class="panel-group" id="accordion">
              <div class="panel" style="background:transparent">
                <div class="panel-heading" style="background:transparent">
                  <h4 class="text-right" style="padding-right: 10px">
                    <a class="btn btn-xs btn-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      View Additional Bandwidth Details <i class="fa fa-chevron-down"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="row"><div id="bw_tables" style="padding:0;margin:0;"></div></div>
                  </div>
                </div>
              </div>
            </div>
            <//?php } ?>
        </div>

        <div class="col-sm-12 col-md-4 dash-right">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-inverse">
                <ul class="panel-options">
                  <li><a class="panel-minimize"><i class="fa fa-chevron-down"></i></a></li>
                  <li><a class="panel-remove"><i class="fa fa-close text-danger"></i></a></li>
                </ul>
                <div class="panel-heading">
                  <h4 class="panel-title">Your Disk Status</h4>
                </div>
                <div class="panel-body">
                  <div id="disk_data"></div>
                </div>
              </div>
            </div><!-- DISK WIDGET -->
            <div class="col-sm-12">
              <div class="panel panel-inverse">
                <ul class="panel-options">
                  <li><a class="panel-minimize"><i class="fa fa-chevron-down"></i></a></li>
                  <li><a class="panel-remove"><i class="fa fa-close text-danger"></i></a></li>
                </ul>
                <div class="panel-heading">
                  <h4 class="panel-title">System RAM Status</h4>
                </div>
                <div class="panel-body">
                  <div id="meterram"></div>
                </div>
              </div>
            </div><!-- RAM WIDGET -->
            <div class="col-sm-12">
              <div class="panel panel-inverse">
                <ul class="panel-options">
                  <li><a class="panel-minimize"><i class="fa fa-chevron-down"></i></a></li>
                  <li><a class="panel-remove"><i class="fa fa-close text-danger"></i></a></li>
                </ul>
                <div class="panel-heading">
                  <h4 class="panel-title">CPU Status</h4>
                </div>
                <div class="panel-body">
                  <div id="metercpu"></div>
                  <hr />
                  <span class="nomargin" style="font-size:14px">
                    <?php echo $sysInfo['cpu']['model'];?><br/>
                    [<span style="color:#111;font-weight:600">x<?php echo $sysInfo['cpu']['num']; ?></span> core]
                  </span>
                </div>
              </div>
            </div><!-- CPU WIDGET -->
            <div class="col-sm-12">
              <div class="panel panel-inverse-full panel-updates">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-9">
                      <h4 class="panel-title text-success">Server Load</h4>
                      <h4><span id="cpuload"></span></h4>
                      <p>This is your servers current load average</p>
                    </div>
                    <div class="col-sm-3 text-right">
                      <i class="fa fa-heartbeat text-danger" style="font-size: 90px"></i>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 mt20 text-center">
                        <strong>Uptime:</strong> <span id="uptime"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- panel -->
            </div>
          </div><!-- row -->
        </div>
      </div>
    </div><!-- contentpanel -->
  </div><!-- mainpanel -->

  <?php
    include("inc/panel.scripts.php");
    include("inc/panel.end.php");
  ?>
