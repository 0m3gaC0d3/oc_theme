<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Wolf Utz <wpu@hotmail.de>, OmegaCode
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
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

namespace OmegaCode\OcTheme\Utility;

/**
 * Class InstallUtility
 * @package OmegaCode\OcTheme\Utility
 */
class InstallUtility
{
    
    /**
     * Creates predefined backend layouts.
     */
    public function createBackendLayouts()
    {
        // Flush Backend layouts with uid 1,2 and 3.
        $GLOBALS['TYPO3_DB']->exec_DELETEquery('backend_layout', ' uid = 1 OR uid = 2 OR uid = 3 ');
        // Insert Default layout.
        $GLOBALS['TYPO3_DB']->exec_INSERTquery('backend_layout', [
            'uid' => '1',
            'pid' => '0',
            'tstamp' => time(),
            'crdate' => time(),
            'cruser_id' => '1',
            'title' => 'Default',
            'description' => 'Standard page layout.',
            'config' => <<<CONFIG
backend_layout {
	colCount = 1
	rowCount = 3
	rows {
		1 {
			columns {
				1 {
					name = Header
					colPos = 1
				}
			}
		}
		2 {
			columns {
				1 {
					name = Content
					colPos = 0
				}
			}
		}
		3 {
			columns {
				1 {
					name = Footer
					colPos = 2
				}
			}
		}
	}
}
CONFIG
        ]);
        // Insert Full layout.
        $GLOBALS['TYPO3_DB']->exec_INSERTquery('backend_layout', [
            'uid' => '2',
            'pid' => '0',
            'tstamp' => time(),
            'crdate' => time(),
            'cruser_id' => '1',
            'title' => 'Fullpage',
            'description' => 'Full page layout.',
            'config' => <<<CONFIG
backend_layout {
	colCount = 1
	rowCount = 3
	rows {
		1 {
			columns {
				1 {
					name = Header
					colPos = 1
				}
			}
		}
		2 {
			columns {
				1 {
					name = Content
					colPos = 0
				}
			}
		}
		3 {
			columns {
				1 {
					name = Footer
					colPos = 2
				}
			}
		}
	}
}
CONFIG
        ]);
        // Insert Sidebar layout.
        $GLOBALS['TYPO3_DB']->exec_INSERTquery('backend_layout', [
            'uid' => '3',
            'pid' => '0',
            'tstamp' => time(),
            'crdate' => time(),
            'cruser_id' => '1',
            'title' => 'Sidebar',
            'description' => 'Standard page layout with a sidebar on the right side.',
            'config' => <<<CONFIG
backend_layout {
	colCount = 2
	rowCount = 3
	rows {
		1 {
			columns {
				1 {
					name = Header
					colPos = 1
				}
			}
		}
		2 {
			columns {
				1 {
					name = Content
					colPos = 0
				}
				2 {
					name = Sidebar
					colPos = 3
				}
			}
		}
		3 {
			columns {
				1 {
					name = Footer
					colPos = 2
				}
			}
		}
	}
}
CONFIG
        ]);
    }
    
}
