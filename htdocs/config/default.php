<?php
/**************************************************************************

These settings can be overriden by local.php, so these values are only
used if they aren't defined in local.php first.

***************************************************************************/

	// Site title
	if(!defined('MIB_SITE_TITLE')) DEFINE('MIB_SITE_TITLE', 'SteemTroll');

	// Default skin to use...
	if(!defined('MIB_SKIN')) DEFINE('MIB_SKIN', 'default');

	// Debug mode for testing environments. Leave as false to suppress
	// debug output.
	if(!defined('MIB_DEBUG')) DEFINE('MIB_DEBUG', false);

