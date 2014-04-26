<?php
/**
 * Plugin Name: TGT Plugins for ctrlaltyouth
 * Plugin URI: http://techguytom.com
 * Description: Adding support for login menue and user BuddyPress Galleries on
 * ctrlaltyouth.org;  REQUIRES: WP Views Plugin
 * Version: 0.2.1
 * Author: Tom Jenkins <tom@techguytom.com>
 * Author URI: http://techguytom.com
 */

require_once 'TgtPlugin.php';

$tgtPlugin = new Tgt\TgtPlugin;

$tgtPlugin->setPath(realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
spl_autoload_register(array($tgtPlugin, 'autoloader'));

register_activation_hook(__FILE__, array($tgtPlugin, 'pluginActivation'));
register_deactivation_hook(__FILE__, array($tgtPlugin, 'pluginDeactivation'));

$tgtPlugin->run();
