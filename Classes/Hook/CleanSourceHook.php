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

namespace OmegaCode\OcTheme\Hook;

/**
 * Class CleanSourceHook
 * @package OmegaCode\OcTheme\Hook
 *
 * Hook to create cleaner html source.
 */
class CleanSourceHook
{

    /**
     * No cache
     *
     * @return void
     */
    public function contentPostProcOutput(&$params, &$that)
    {
        if (!$GLOBALS['TSFE']->isINTincScript()) {
            return;
        }
        $this->cleanUp($params['pObj']->content);
    }

    /**
     * Cached
     *
     * @return void
     */
    public function contentPostProcAll(&$params, &$that)
    {
        if ($GLOBALS['TSFE']->isINTincScript()) {
            return;
        }
        $this->cleanUp($params['pObj']->content);
    }
    
    /**
     * Calls the cleanup functions.
     * 
     * @param string $content
     * @return void
     */
    private function cleanUp(&$content)
    {
        $this->removeGeneratorTag($content);
        $this->removeHTMLComments($content);
        $this->removeNewlinesAndLinefeed($content);
        $this->removeTabulators($content);
        $this->removeWhitespaces($content);
    }
    
    /**
     * Remove generator meta tag.
     *
     * @param string $content
     * @return void
     */
    private function removeGeneratorTag(&$content)
    {
        $content = preg_replace('/<meta name="?generator"?.+?>/is', '', $content);
    }

    /**
     * Removes all html comments.
     *
     * @param string $content
     * @return void
     */
    private function removeHTMLComments(&$content)
    {
        $content = preg_replace('/<!--[^>]*-->/', '', $content);
    }
    
    /**
     * Removes all html comments.
     *
     * @param string $content
     * @return void
     */
    private function removeNewlinesAndLinefeed(&$content)
    {
        $content = preg_replace('/\n/', '', $content);
        $content = preg_replace('/\r/', '', $content);
        $content = preg_replace('/\n\r/', '', $content);
        $content = preg_replace('/\r\n/', '', $content);
        // $content = preg_replace('/^[\s\t]*(\r\n|\n|\r)/', '', $content); // kill it
    }
    
    /**
     * Removes all html comments.
     *
     * @param string $content
     * @return void
     */
    private function removeTabulators(&$content)
    {
        $content = preg_replace('/\t/', '', $content);
    }
    
    /**
     * Removes all html comments.
     *
     * @param string $content
     * @return void
     */
    private function removeWhitespaces(&$content)
    {
        $content = preg_replace('/\s\s+/', '', $content);
    }
    
}
