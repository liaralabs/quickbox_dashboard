<?php

////////////////////////////////////////
//DASHBOARD MENU
///////////////////////////////////////

// main menu tab
$L['MAIN_MENU'] = 'Main Menu';
$L['DOWNLOADS'] = 'Downloads';
$L['WEB_CONSOLE'] = 'Web Console';

// plugin menu tab
$L['PLUGIN_MENU'] = 'Plugin Menu';
$L['PMENU_NOTICE_TXT'] = 'Easily install and uninstall ruTorrent plugins simply by clicking on the plugin name';

// quick help menu tab
$L['QUICK_SYSTEM_TIPS'] = 'Quick System Tips';
$L['DISKTEST_TXT'] = 'Type this command to perform a quick r/w test of your disk.';
$L['FIXHOME_TXT'] = 'Type this command to quickly adjusts /home directory permissions.';
// admin commands section
$L['ADMIN_COMMANDS'] = 'Admin Commands';
$L['SETDISK_TXT'] = 'Type this command in ssh to allocate the amount of disk space you would like to give to a user.';
$L['CREATESEEDBOXUSER_TXT'] = 'Type this command in ssh to create a new seedbox user on your server.';
$L['DELETESEEDBOXUSER_TXT'] = 'Type this command in ssh to delete a seedbox user on your server. You will need to enter the users account name, you will be prompted.';
$L['CHANGEUSERPASS_TXT'] = 'Typing this command in ssh allows you to change a disired users password.';
$L['SHOWSPACE_TXT'] = 'Use the above command as root to show the amount of disk space currently used by each user.';
$L['UPGRADEBTSYNC_TXT'] = 'Type this command in ssh to upgrade BTSync to newest version when available.';
$L['UPGRADEPLEX_TXT'] = 'Type this command in ssh to upgrade Plex to newest version when available.';
$L['UPGRADEDELUGE_TXT'] = 'Type this command in ssh to upgrade Deluge to newest version when available.';
$L['CLEAN_MEM_TXT'] = 'Use the above command as root if/when you decide to clear your systems Physical Memory Cache';
// essential user commands section
$L['ESSENTIAL_USER_COMMANDS'] = 'Essential User Commands';
$L['RELOAD_TXT'] = 'allows user to reload their services (rtorrent and irssi)';
$L['SCREEN_RTORRNENT_TXT'] = 'allows user to restart/remount rtorrent from SSH';
$L['SCREEN_IRSSI_TXT'] = 'allows user to restart/remount irssi from SSH';


////////////////////////////////////////
//DASHBOARD WIDGET TITLES
///////////////////////////////////////

// restart services widget
$L['RESTART_SERVICES'] = 'Restart Services';

// service controller widget
$L['ENABLE_DISABLE_SERVICES'] = 'Enable/Disable Services';

// package management center widget
$L['PACKAGE_MANAGEMENT_CENTER'] = 'Package Management Center';

// bandwidth data widget
$L['BANDWIDTH_DATA'] = 'Bandwidth Data';

// disk status widget
$L['YOUR_DISK_STATUS'] = 'Your Disk Status';

// memory status widget
$L['SYSTEM_RAM_STATUS'] = 'System RAM Status';

// cpu status widget
$L['CPU_STATUS'] = 'CPU Status';

// server load widget
$L['SERVER_LOAD'] = 'Server Load';


////////////////////////////////////////
//PACKAGE MANAGEMENT CENTER
///////////////////////////////////////

// package management center notice
$L['PMC_NOTICE_TXT'] = '<strong>Heads Up!</strong> Please be advised that these options are not the same as enabling and disabling a software package. These options are designed to either install or uninstall.';

// package management center column headers
$L['NAME'] = 'Name';
$L['DETAILS'] = 'Details';
$L['AVAILABILITY'] = 'Availability';

// packages
$L['BTSYNC_DETAILS'] = 'BitTorrent Sync by BitTorrent, Inc is a proprietary peer-to-peer file synchronization tool.';
$L['COUCHPOTATO'] = 'Download movies automatically, easily and in the best quality as soon as they are released, via usenet or torrents.';
$L['DELUGE'] = 'Deluge is a lightweight, Free Software, cross-platform BitTorrent client.';
$L['JACKETT'] = 'API Support for your favorite private trackers.';
$L['PLEX'] = 'Plex lets you stream your content to any Plex enabled device.';
$L['PLEX_REQUESTS'] = 'Plex Requests offers a beautiful and easy to use interface for items users wish to be added to the library. Integrates with CouchPotato, SickRage and Sonarr.';
$L['PLEXPY'] = 'A python based web application for monitoring, analytics and notifications for Plex Media Server';
$L['QUASSEL'] = 'Quassel IRC is a modern, cross-platform, distributed IRC client based on the Qt4 framework.';
$L['QUOTAS'] = 'This feature of Linux allows the system administrator to allocate a maximum amount of disk space a user or group may use.';
$L['RAPIDLEECH'] = 'Rapid Leech is a free server transfer script for use on various popular upload/download sites such as uploaded.net, Rapidshare.com and more than 120 others.';
$L['SICKRAGE'] = 'Video File Manager for TV Shows, It watches for new episodes of your favorite shows and when they are posted it does its magic.';
$L['SONARR'] = 'Sonarr is a tv series management tool which will work with both torrents and usenet.';
$L['X2GO'] = 'X2Go is an open source remote desktop software for Linux that uses the NX technology protocol.';
$L['ZNC'] = 'ZNC is an IRC network bouncer or BNC. It can detach the client from the actual IRC server, and also from selected channels.';

// package management center buttons
$L['INSTALL'] = 'Install';
$L['INSTALLED'] = 'Installed';
$L['QBPM'] = 'QBPM Only';

////////////////////////////////////////
//BANDWIDTH & DATA TABLES
///////////////////////////////////////

// column headers and dropdown toggle button
$L['NETWORK'] = 'Network';
$L['UPLOAD'] = 'Upload';
$L['DOWNLOAD'] = 'Download';
$L['VIEW_ADDITIONAL_BANDWIDTH_DETAILS'] = 'View Additional Bandwidth Details';

// main table headers
$L['Summary'] = 'Summary';
$L['Top 10 days'] = 'Top 10 days';
$L['Last 24 hours'] = 'Last 24 hours';
$L['Last 30 days'] = 'Last 30 days';
$L['Last 12 months'] = 'Last 12 months';

// traffic table columns
$L['In'] = 'In';
$L['Out'] = 'Out';
$L['Total'] = 'Total';

// summary rows
$L['This hour'] = 'This hour';
$L['This day'] = 'This day';
$L['This month'] = 'This month';
$L['All time'] = 'All time';

// date formats
$L['datefmt_days'] = '%d %B';
$L['datefmt_days_img'] = '%d';
$L['datefmt_months'] = '%B %Y';
$L['datefmt_months_img'] = '%b';
$L['datefmt_hours'] = '%l%p';
$L['datefmt_hours_img'] = '%l';
$L['datefmt_top'] = '%d %B %Y';


////////////////////////////////////////
//DISK STATUS WIDGET
///////////////////////////////////////

$L['FREE'] = 'Free';
$L['USED'] = 'Used';
$L['SIZE'] = 'Size';
$L['DISK_SPACE'] = 'Disk Space';
$L['PERCENTAGE_TXT'] = 'You have used "$perused" of your total disk space';
$L['RTORRENTS_TITLE'] = 'Torrents in rtorrent';
$L['RT_TXT'] = 'There are !x torrents loaded.';
$L['DTORRENTS_TITLE'] = 'Torrents in deluge';
$L['D_TXT'] = 'There are !x torrents loaded.';


////////////////////////////////////////
//SYSTEM RAM STATUS WIDGET
///////////////////////////////////////

// physical memory
$L['PHYSICAL_MEMORY_TITLE'] = 'Physical Memory Usage';
$L['PHYSICAL_MEMORY_USED_TXT'] = 'used';
$L['PHYSICAL_MEMORY_IDLE_TXT'] = 'idle';

//cached memory
$L['CACHED_MEMORY_TITLE'] = 'Cached Memory Usage';
$L['CACHED_MEMORY_USAGE_TXT'] = 'Cache memory usage is at';
$L['CACHED_MEMORY_BUFFERS_TXT'] = 'Buffers are at';

// real memory
$L['REAL_MEMORY_TITLE'] = 'Real Memory Usage';
$L['REAL_MEMORY_USAGE_TXT'] = 'Real memory usage';
$L['REAL_MEMORY_FREE_TXT'] = 'Real memory free';

// swap usage
$L['SWAP_TITLE'] = 'Swap Usage';
$L['SWAP_TOTAL_TXT'] = 'SWAP Area';
$L['SWAP_USED_TXT'] = 'used';
$L['SWAP_IDLE_TXT'] = 'idle';

// total ram
$L['TOTAL_RAM'] = 'Total System RAM';

// clean mem button
$L['CLEAR_CACHE'] = 'Clear Memory Cache';


////////////////////////////////////////
//CPU STATUS WIDGET
///////////////////////////////////////

// used percentage
$L['CPU_USED'] = 'used';

// idle percentage
$L['CPU_IDLE'] = 'idle';

// cpu info
$L['FREQUENCY'] = 'Frequency:';
$L['SECONDARY'] = 'Secondary Cache:';


////////////////////////////////////////
//SERVER LOAD WIDGET
///////////////////////////////////////

$L['SL_TXT'] = 'This is your servers current load average';
$L['UPTIME'] = 'Uptime';




// SAMPLE
// $L['SAMPLE'] = 'Sample';
