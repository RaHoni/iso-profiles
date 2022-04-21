<?php
$CONFIG = array (
'datadirectory' => '/var/lib/nextcloud/data',
'logfile' => '/var/log/nextcloud/nextcloud.log',
'apps_paths' => [
  [
    'path'=> '/usr/share/webapps/nextcloud/apps',
    'url' => '/apps',
    'writable' => false,
  ],
  [
    'path'=> '/var/lib/nextcloud/apps',
    'url' => '/wapps',
    'writable' => true,
  ],
],
'trusted_domains' =>
  array (
    0 => 'localhost',
    1 => 'nextcloud.edubase.lan',
    2 => '192.168.0.200',
  ),    
'overwrite.cli.url' => 'https://nextcloud.edubase.lan/',
'htaccess.RewriteBase' => '/',
);
