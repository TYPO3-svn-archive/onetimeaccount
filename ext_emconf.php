<?php

########################################################################
# Extension Manager/Repository config file for ext: "onetimeaccount"
#
# Auto generated 13-07-2008 17:34
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'One-time FE account',
	'description' => 'This extension allows users to create a one-time FE account to which they will be automatically logged in. The users do not need to enter a user name or password. So this login can be used only one time.',
	'category' => 'plugin',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'shy' => '',
	'dependencies' => 'ameos_formidable,oelib,static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'oliverklee.de',
	'version' => '0.2.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.1.0-0.0.0',
			'typo3' => '4.0.0-0.0.0',
			'ameos_formidable' => '0.7.0-0.7.0',
			'oelib' => '0.4.1-',
			'static_info_tables' => '2.0.2-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'sr_feuser_register' => '2.2.0-',
		),
	),
	'_md5_values_when_last_written' => 'a:19:{s:9:"ChangeLog";s:4:"a773";s:39:"class.tx_onetimeaccount_configcheck.php";s:4:"ae43";s:21:"ext_conf_template.txt";s:4:"1c02";s:12:"ext_icon.gif";s:4:"27c7";s:17:"ext_localconf.php";s:4:"af4b";s:14:"ext_tables.php";s:4:"8541";s:13:"locallang.xml";s:4:"3623";s:16:"locallang_db.xml";s:4:"b6fc";s:14:"doc/manual.sxw";s:4:"1977";s:14:"pi1/ce_wiz.gif";s:4:"be1b";s:35:"pi1/class.tx_onetimeaccount_pi1.php";s:4:"35cb";s:43:"pi1/class.tx_onetimeaccount_pi1_wizicon.php";s:4:"a58b";s:21:"pi1/flexforms_pi1.xml";s:4:"2b0e";s:17:"pi1/locallang.xml";s:4:"ca0e";s:26:"pi1/onetimeaccount_pi1.css";s:4:"e9f4";s:27:"pi1/onetimeaccount_pi1.html";s:4:"0e66";s:26:"pi1/onetimeaccount_pi1.xml";s:4:"423e";s:24:"pi1/static/constants.txt";s:4:"331d";s:20:"pi1/static/setup.txt";s:4:"f717";}',
	'suggests' => array(
		'sr_feuser_register' => '2.2.0-',
	),
);

?>