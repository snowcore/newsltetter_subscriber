<?php
class Snowcore_Subscriber_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return array
     */
    public function getCountriesOptionHash()
    {
        $result = array();
        $countries = Mage::helper('directory')->getCountryCollection()->toOptionArray();
        foreach ($countries as $country) {
            if (!empty($country['value'])) {
                $result[$country['value']] = $country['label'];
            }
        }

        return $result;
    }
}