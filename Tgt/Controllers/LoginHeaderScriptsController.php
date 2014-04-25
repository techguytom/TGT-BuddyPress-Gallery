<?php
/**
 * Enqueue Scripts Controller
 *
 * @package WordPress
 * @subpackage Controllers
 */
namespace Tgt\Controllers;

/**
 * LoginHeaderScriptsController
 *
 * Add css and javascript files
 *
 * @uses BaseController
 * @package WordPress
 * @author Tom Jenkins <tom@tgtdesign.com>
 * @version 1.0
 */
class LoginHeaderScriptsController extends BaseController
{

    /**
     * enqueueScripts
     *
     * Adds css and javascript files to header
     *
     */
    public function enqueueScripts()
    {
        wp_enqueue_style('tgtLogIn', plugins_url() . '/tgt-plugins/Tgt/Assets/tgtLogin.css');
        wp_enqueue_script('tgtLogIn', plugins_url() . '/tgt-plugins/Tgt/Assets/tgtLogin.js', 'jquery');
    }
} 
