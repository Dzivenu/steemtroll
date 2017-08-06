<?php
	includeClass('class_content.php');

	// Content settings
	$defaultContent = 'home'; // Which tab to display if none selected
	$contentArray = array();

	// Content objects
	$homePage = new Content();
	$homePage->name = 'SteemTroll';
	$homePage->label = 'home';
	$homePage->setContent("<h1>Welcome to Steemtroll</h1>
<p>A CMS for PHP without a database.</p>
<p><em>Don't try to control or the troll will con you!</em></p>
<p>A work in progress.</p>");
	addToContentArray($homePage);

	$aboutPage = new Content();
	$aboutPage->name = 'About SteemTroll';
	$aboutPage->label = 'about';
	$aboutPage->setContent("<h1>About Steemtroll</h1>
<p>SteemTroll lies somewhere between a CMS and a framework, designed to work without the need for a database.
Blog posts, comments and even flat pages can be stored on the STEEM blockchain, and then embedded
into SteemTroll pages via custom content classes.</p>");
	addToContentArray($aboutPage);
	
	// No need to add this one to array, as we're aren't planning to add it to menu or load via ajax etc.
	$error404Page = new Content();
	$error404Page->name = "You're looking for WHAT?" ;
	$error404Page->label = '404';
	$error404Page->setContent("<h1>Seriously?</h1>
	<p>What the hell is the matter with you? You're one sick puppy you know that? Or maybe four hundred and four sick puppies...</p>");
	
	
	