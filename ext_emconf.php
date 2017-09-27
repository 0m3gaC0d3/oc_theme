<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Theme',
	'description' => '',
	'category' => 'distribution',
	'author' => 'Wolf Utz',
	'author_email' => 'wpu@hotmail.de',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearCacheOnLoad' => true,
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.7.0-8.7.99',
            'vhs' => '4.2.0-4.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);