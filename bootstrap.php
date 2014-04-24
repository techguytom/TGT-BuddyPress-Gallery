<?php
/**
 * Plugin Name: TGT BuddyPress Gallery
 * Plugin URI: http://techguytom.com
 * Description: Adding support for user BuddyPress Galleries on
 * ctrlaltyouth.org; REQUIRES: WP Views Plugin
 * Version: 0.0
 * Author: Tom Jenkins <tom@techguytom.com>
 * Author URI: http://techguytom.com
 */

require_once 'TgtPlugin.php';

$tgtPlugin = new Tgt\Gallery\TgtPlugin;

$tgtPlugin->setPath(realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
spl_autoload_register(array($tgtPlugin, 'autoloader'));

register_activation_hook(__FILE__, array($tgtPlugin, 'pluginActivation'));
register_deactivation_hook(__FILE__, array($tgtPlugin, 'pluginDeactivation'));

$tgtPlugin->run();
