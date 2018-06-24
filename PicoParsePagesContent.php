<?php
/**
 * This file is part of Pico. It's copyrighted by the contributors recorded
 * in the version control history of the file, available from the following
 * original location:
 *
 * <https://github.com/PhrozenByte/pico-parse-pages-content/blob/master/PicoParsePagesContent.php>
 *
 * The file was previously part of the project's main repository; the version
 * control history of the original file applies accordingly, available from
 * the following original location:
 *
 * <https://github.com/picocms/Pico/blob/5cf47e65de66ffc963263a059eb5fe5defadd3e2/plugins/01-PicoParsePagesContent.php>
 *
 * SPDX-License-Identifier: MIT
 * License-Filename: LICENSE
 */

/**
 * Parses the contents of all pages
 *
 * This plugin exists for historic reasons only and should not be used! It is
 * disabled by default and needs to be enabled manually.
 *
 * This plugin heavily impacts Pico's performance, you should avoid to enable
 * it whenever possible! If you must parse the contents of a page, do this
 * selectively and only for pages you really need to.
 *
 * @author  Daniel Rudolf
 * @link    http://picocms.org
 * @license http://opensource.org/licenses/MIT The MIT License
 * @version 1.0
 */
class PicoParsePagesContent extends AbstractPicoPlugin
{
    /**
     * This plugin is disabled by default
     *
     * @see AbstractPicoPlugin::$enabled
     */
    protected $enabled = false;

    /**
     * Parses the contents of all pages
     *
     * @see DummyPlugin::onSinglePageLoaded()
     */
    public function onSinglePageLoaded(array &$pageData)
    {
        if (!isset($pageData['content'])) {
            $pageData['content'] = $this->prepareFileContent($pageData['raw_content'], $pageData['meta']);
            $pageData['content'] = $this->parseFileContent($pageData['content']);
        }
    }
}
