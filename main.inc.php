<?php
/*
Version: 1.0
Plugin Name: EditorPlus
Plugin URI: github link
Author: Piwigo team
Author URI: https://github.com/Piwigo
Description: WYSIWYG Editor for Piwigo. Using Quill v2 beta.
Has Settings: true
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Define plugin constants                                               |
// +-----------------------------------------------------------------------+

define('EP_ID', basename(dirname(__FILE__)));
define('EP_PATH', PHPWG_PLUGINS_PATH . EP_ID . '/');
define('EP_REALPATH', realpath(EP_PATH));
define('EP_ADMIN', get_root_url() . 'admin.php?page=plugin-' . EP_ID);

// +-----------------------------------------------------------------------+
// | Init EditorPlus                                                       |
// +-----------------------------------------------------------------------+

// Include once admin function
include_once(EP_PATH . 'include/admin.inc.php');

// init
add_event_handler('init', 'ep_init');

if (defined('IN_ADMIN')) {
    // Include EditorPlus
    include(EP_PATH . 'editorplus.php');
}
