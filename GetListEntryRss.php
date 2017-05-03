<?php
class Helper_View_GetListEntryRss extends Zend_View_Helper_Abstract
{
    /**
     * Get the HTML for a single list element of an overview list for animal
     * @param Default_Model_AnimalEntity $oAnimal the animal object of that entry
     * @param array $aOptions an array with options that will customize the entry. Don't set an entry to hide the line
     *  blShowRace
     *  blShowLifeDates
     *  blShowCertificationResult
     */
    public function getListEntryRss( Default_Model_AnimalEntity $oAnimal, array $aOptions = array() )
    {
        require __DIR__ . '/templates/ListEntry/Rss.phtml';
    }
}
