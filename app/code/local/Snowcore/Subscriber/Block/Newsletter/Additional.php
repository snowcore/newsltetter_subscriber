<?php
class Snowcore_Subscriber_Block_Newsletter_Additional extends Mage_Core_Block_Template
{
    /**
     * @return array
     */
    public function getCountriesOptions()
    {
        return Mage::helper('directory')->getCountryCollection()->toOptionArray();
    }
}