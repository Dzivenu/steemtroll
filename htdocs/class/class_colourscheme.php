<?php
	class ColourScheme {
		// Main background series
		public $bg_main = '#000';
		public $bg_second = '#111';
		public $bg_third = '#000';
		public $bg_fourth = '#333';

		// Alt Background series
		public $alt_bg_main = '#633';
		public $alt_bg_second = '#744';
		public $alt_bg_third = '#400';
		public $alt_bg_fourth = '#522';

		// Text
		public $txt_main = '#fff';
		public $txt_second = '#ccc';

		// Links
		public $link = '#f00';
		public $link_visited = '#f33';
		public $link_hover = '#f99';
		public $link_active = '#f99';

		//Messages
		public $msg_bg = '#696';
		public $msg_border = '#9c9';
		public $msg_txt = '#cfc';

		//Warning Messages
		public $warn_bg = '#966';
		public $warn_border = '#c99';
		public $warn_txt = '#fcc';

		function __construct() {
			// TO DO: Get users custom style, page owners style or style defined in settings.
            $this->getSiteDefaultColours();

			if($this->userHasColours()) $this->getUserColours();
			else $this->getPageOwnerColours();
		}

		function userHasColours() {
			return false;
		}

		function getUserColours() {
			// TODO: Can only add this after we have added authentication.
		}

        function getPageOwnerColours() {
            // TODO: Can only add this after we have added authentication.
        }

        function getSiteDefaultColours() {
            if(defined('MIB_COLOUR_BG_MAIN')) $this->bg_main = MIB_COLOUR_BG_MAIN;
            if(defined('MIB_COLOUR_BG_SECOND')) $this->bg_second = MIB_COLOUR_BG_SECOND;
            if(defined('MIB_COLOUR_BG_THIRD')) $this->bg_third = MIB_COLOUR_BG_THIRD;
            if(defined('MIB_COLOUR_BG_FOURTH')) $this->bg_fourth = MIB_COLOUR_BG_FOURTH;

            // Alt Background series:
            if(defined('MIB_COLOUR_ALT_BG_MAIN')) $this->alt_bg_main = MIB_COLOUR_ALT_BG_MAIN;
            if(defined('MIB_COLOUR_ALT_BG_SECOND')) $this->alt_bg_second = MIB_COLOUR_ALT_BG_SECOND;
            if(defined('MIB_COLOUR_ALT_BG_THIRD')) $this->alt_bg_third = MIB_COLOUR_ALT_BG_THIRD;
            if(defined('MIB_COLOUR_ALT_BG_FOURTH')) $this->alt_bg_fourth = MIB_COLOUR_ALT_BG_FOURTH;

            // Text
            if(defined('MIB_COLOUR_TXT_MAIN')) $this->txt_main = MIB_COLOUR_TXT_MAIN;
            if(defined('MIB_COLOUR_TXT_SECOND')) $this->txt_second = MIB_COLOUR_TXT_SECOND;

            // Links
            if(defined('MIB_COLOUR_LINK')) $this->link = MIB_COLOUR_LINK;
            if(defined('MIB_COLOUR_LINK_VISITED')) $this->link_visited = MIB_COLOUR_LINK_VISITED;
            if(defined('MIB_COLOUR_LINK_HOVER')) $this->link_hover = MIB_COLOUR_LINK_HOVER;
            if(defined('MIB_COLOUR_LINK_ACTIVE')) $this->link_active = MIB_COLOUR_LINK_ACTIVE;

            //Messages
            if(defined('MIB_COLOUR_MSG_BG')) $this->msg_bg = MIB_COLOUR_MSG_BG;
            if(defined('MIB_COLOUR_MSG_BORDER')) $this->msg_border = MIB_COLOUR_MSG_BORDER;
            if(defined('MIB_COLOUR_MSG_TXT')) $this->msg_txt = MIB_COLOUR_MSG_TXT;

            //Warning Messages
            if(defined('MIB_COLOUR_WARN_BG')) $this->warn_bg = MIB_COLOUR_WARN_BG;
            if(defined('MIB_COLOUR_WARN_BORDER')) $this->warn_border = MIB_COLOUR_WARN_BORDER;
            if(defined('MIB_COLOUR_WARN_TXT')) $this->warn_txt = MIB_COLOUR_WARN_TXT;
		}
	}