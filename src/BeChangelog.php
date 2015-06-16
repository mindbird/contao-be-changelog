<?php

namespace BeChangelog;

class BeChangelog extends \Backend
{
    public function addSystemMessages()
    {
        $objUser = \BackendUser::getInstance();

        if ($GLOBALS['TL_CONFIG']['be_changelog_src'] == '') {
            return '';
        }

        $strFile = file_get_contents($GLOBALS['TL_CONFIG']['be_changelog_src']);

        if ($strFile == '') {
            return '';
        }
        $objJson = json_decode($strFile);

        $objTemplate = new \BackendTemplate('be_changelog');
        $objTemplate->strTitle = 'Changelog';
        $arrEntries = array();
        foreach ($objJson as $objEntry) {
            $objTemplateEntry = new \BackendTemplate('be_changelog_entry');
            $objTemplateEntry->strCssClass = $objUser->lastLogin > $objEntry->timestamp ? '' : ' tl_info';
            $objTemplateEntry->strDate = \Date::parse(\Config::get('datimFormat'), $objEntry->timestamp);
            $objTemplateEntry->strVersion = $objEntry->version;
            $objTemplateEntry->strEntries = '<li style="padding-bottom: 5px;">' . implode('</li><li style="padding-bottom: 5px;">', $objEntry->entries) . '</li>';
            $arrEntries[$objEntry->timestamp] = $objTemplateEntry->parse();
        }
        krsort($arrEntries);
        $objTemplate->strEntries = implode('', $arrEntries);

        return $objTemplate->parse();
    }
}
