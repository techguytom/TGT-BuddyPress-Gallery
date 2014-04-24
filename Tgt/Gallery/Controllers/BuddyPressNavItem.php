<?php

namespace Tgt\Gallery\Controllers;

class BuddyPressNavItem extends BaseController
{
    public function newNavItem()
    {
        $arg = array(
            'name' => 'Hello',
        );
        bp_core_new_subnav_item($arg);
    }
}
