<?php

/*
global $wgWikiEditorFeatures;
if (!isset($wgWikiEditorFeatures)) {
	require_once 'extensions/WikiEditor/WikiEditor.php';
	global $wgDefaultUserOptions;
	$wgDefaultUserOptions['usebetatoolbar'] = 1;
	$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
}
*/
require_once 'components/AutoRedirect.php';

$wgExtensionMessagesFiles['AutoRedirect'] = dirname( __FILE__ ) . '/AutoRedirect.i18n.php';

$wgExtensionCredits['AutoRedirect'][] = array(
	'path' => __FILE__,
	'name' => 'AutoRedirect',
	'author' =>'Lethosor, XCompWiz',
	'url' => 'https://github.com/xcompwiz/AutoRedirect',
	'description' => 'Automatically redirect users to configured namespaces',
	//'version'  => '1.0.5-dev',
);
