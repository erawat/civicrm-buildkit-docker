<?php
    #### If deployed via civibuild, include any "pre" scripts
    global $civibuild;
    $civibuild['PRJDIR'] = '/buildkit/civicrm-buildkit';
    $civibuild['SITE_CONFIG_DIR'] = '/buildkit/civicrm-buildkit/app/config/drupal-clean';
    $civibuild['SITE_TYPE'] = 'drupal-clean';
    $civibuild['SITE_NAME'] = 'drupal-clean';
    $civibuild['SITE_ID'] = 'default';
    $civibuild['SITE_TOKEN'] = 'YQklcbhmvOSKOyea';
    $civibuild['PRIVATE_ROOT'] = '/buildkit/civicrm-buildkit/app/private/drupal-clean';
    $civibuild['WEB_ROOT'] = '/buildkit/civicrm-buildkit/build/drupal-clean/web';
    $civibuild['CMS_ROOT'] = '/buildkit/civicrm-buildkit/build/drupal-clean/web';

    if (file_exists($civibuild['PRJDIR'].'/src/civibuild.settings.php')) {
      require_once $civibuild['PRJDIR'].'/src/civibuild.settings.php';
      _civibuild_settings(__FILE__, 'civicrm.settings.d', $civibuild, 'pre');
    }

$databases = array (
  'default' => 
  array (
    'default' => 
    array (
      'database' => 'drupal',
      'username' => 'root',
      'password' => 'root',
      'host' => 'mysql',
      'port' => '3306',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
  'civicrm' => 
  array (
    'default' => 
    array (
      'database' => 'civicrm',
      'username' => 'root',
      'password' => 'root',
      'host' => 'mysql',
      'port' => '3306',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

$update_free_access = FALSE;

$drupal_hash_salt = 'pREJiQ6VqeBJGBu04NC06ljJ-FSiKuKDtN4vJ55fgss';

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);

$conf['404_fast_paths_exclude'] = '/\/(?:styles)|(?:system\/files)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

$conf['file_scan_ignore_directories'] = array(
  'node_modules',
  'bower_components',
);

  #### If deployed via civibuild, include any "post" scripts
  if (file_exists($civibuild['PRJDIR'].'/src/civibuild.settings.php')) {
    require_once $civibuild['PRJDIR'].'/src/civibuild.settings.php';
    _civibuild_settings(__FILE__, 'drupal.settings.d', $civibuild, 'post');
  }
