<?php
	$homePage = new Content();
	$homePage->name('SteemTroll');
	$homePage->setContent("<h1>Welcome to Steemtroll</h1>
<p>A CMS for PHP and Apache.</p>
<p><em>Don't try to control or the troll will con you!</em></p>
<p>A work in progress.</p>");
	
	$page->content[] = $homePage;