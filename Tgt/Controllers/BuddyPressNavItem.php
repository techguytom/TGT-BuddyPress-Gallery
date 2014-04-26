<?php
/**
 * BuddyPressnavItem.php
 */

namespace Tgt\Controllers;

/**
 * BuddyPressNavItem
 *
 * Adds nav item to members area bar and associated page.
 *
 * @uses BaseController
 * @package BuddyPress
 * @author Tom Jenkins <tom@techguytom.com>
 * @version 0.2
 */
class BuddyPressNavItem extends BaseController
{
    /**
     * newNavItem
     *
     * Add the Nav Item to BuddyPress
     *
     * @return void
     */
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

    /**
     * galleryScreen
     *
     * Setup Screen display features
     *
     * @return void
     */
    public function galleryScreen()
    {
        add_action('bp_template_title', array($this, 'title'));
        add_action('bp_template_content', array($this, 'displayControl'));
        bp_core_load_template(apply_filters('bp_core_template_plugin', 'members/single/plugins'));
    }

    /**
     * title
     *
     * Handle view of Title
     *
     * @return void
     */
    public function title()
    {
        $data        = new \stdClass;
        $data->title = 'Member Gallery';

        $this->render('title', $data);
    }

    /**
     * displayControl
     *
     * Handle the Content Area display
     *
     * @return void
     */
    public function displayControl()
    {
        global $bp;
        
        $data          = new \stdClass;
        $data->gallery = render_view(
            array(
                'name'   => 'member-gallery',
                'author' => $bp->displayed_user->id
            )
        );

        $this->render('gallery', $data);
    }
}
