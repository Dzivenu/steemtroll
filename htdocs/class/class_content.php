<?php
	/* Most basic content class.  Contains just a string to render, but provides 
	a lot of the functionality that other content classes need to inherit or override. */

	class Content {
		public $label = ''; // should be lower case and unique. Used in html ids, anchors and ajax loading.
		public $name = ''; // Used in menus
		public $content = ''; // In base Content class, this really is the HTML content of the page.
		public $ajax = true; // Allow ajax loading in a tab
		public $anchor = true; // Allow content to be loaded in an anchor

		public $folder = 'content';

		public $skin = 'default';
		public $css = array('content.css.php');
		public $scripts = array();

		function __construct() {
		}

		function __get($name) {
			switch($name) {
				case 'content':
					return $this->getContent();
					break;
			}
		}

		function getTemplate($filename,$server_path=true) {
			// Check which path we need for this template (ie
			// selected skin, default skin, mod class or default class.)
			if(file_exists(BASE_PATH.'/skin/'.$this->skin.'/'.$filename)) {
				$path_to_file = '/skin/'.$this->skin.'/'.$this->view.'/'.$filename;
			} elseif(file_exists(BASE_PATH.'/skin/default/'.$filename)) {
				$path_to_file = '/skin/default/'.$this->view.'/'.$filename;
			} elseif(file_exists(BASE_PATH.'/mod/'.$this->folder.'/'.$filename)) {
				$path_to_file = '/mod/'.$this->folder.'/'.$filename;
			} else {
				// All non-core content derived classes are responsible for making sure
				// they include a default template for all templates they use.
				$path_to_file = '/class/'.$this->folder.'/'.$filename;
			}

			if($server_path) $path_to_file = BASE_PATH.$path_to_file;

			return $path_to_file;
		}

		function getCSS() {
			$css_files = array();
			foreach($this->css as $css) {
				$css_files[] = $this->getTemplate($css,false);
			}
			return $css_files;
		}

		function getScripts() {
			$scripts = array();
			foreach($this->scripts as $script) {
				$scripts[] = $this->getTemplate($script,false);
			}
			return $scripts;
		}
		
		
		function setContent($html) {
			return $this->content = $html;
		}
		function getContent() {
			return $this->content;
		}

		function render() {
			include($this->getTemplate('content.php'));
		}
	}
