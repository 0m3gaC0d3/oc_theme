<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Wolf Utz <utz@riconet.de>, riconet
 *      Created on: 07.12.17 09:26
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Page Theme',
    'description' => 'This extension provides a theme for a TYPO3 instance.',
    'version' => '3.1.0',
    'category' => 'distribution',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
            'vhs' => '3.0.0-4.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Wolf Utz',
    'author_email' => 'wpu@hotmail.de',
    'author_company' => 'OmegaCode',
    'autoload' => [
        'psr-4' => [
            'OmegaCode\\OcTheme\\' => 'Classes',
        ]
    ],
];
