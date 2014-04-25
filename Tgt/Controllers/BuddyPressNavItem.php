<?php

namespace Tgt\Controllers;

class BuddyPressNavItem extends BaseController
{
    public function newNavItem()
    {
        $arg = array(
            'name' => 'Gallery',
            'slug' => 'cay-gallery',
            'default_subnav_slug' => 'cay-gallery',
            'position' => 90,
            'screen_function' => array($this, 'galleryScreen'),
            'user_has_access' => true,
        );
        bp_core_new_nav_item($arg);
    }

    public function galleryScreen()
    {
        add_action('bp_template_title', array($this, 'title'));
        add_action('bp_template_content', array($this, 'displayControl')); 
        bp_core_load_template(apply_filters('bp_core_template_plugin', 'members/single/plugins'));
    }

    public function title()
    {
        echo "title";
    }

    public function displayControl()
    {
        $content = "here";
        echo $content;
    }
}
