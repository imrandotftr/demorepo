<?php
class Helper_View_GetListEntryUser extends Zend_View_Helper_Abstract
{
    /**
     * Get the HTML for a single list element of an overview list for user
     * @param Default_Model_UserEntity $oUser the user object of that entry
     * @param array $aOptions an array with options that will customize the entry
     *  blHideButtonArea => true to hide the buttons
     *  blHideAddButton => true to hide the add contact button
     *  blHideMessageButton => true to hide the message button
     *  blHideInfosForClassic => true to hide name/links for classic members
     * blForceAddressAsOneliner => if height on <li> is restricted e.g. on indexpage peopleYouCouldKnow
     * sAdditionalContent => String which is displayed under the country
     * @param string $sPicDimension <b>if is null then 49x63</b>
     */
    public function getListEntryUser( Default_Model_UserEntity $oUser, array $aOptions = array(), $sPicDimension = null, $blFixedHeight = false, $blAddInstant = false )
    {
        if ( $oUser->getStatus() != Dit_Doctrine_EntityBase::STATUS_VISIBLE ) {
            return;
        }
        require __DIR__ . '/templates/ListEntry/User.phtml';
    }
}
