<?php
class Snowcore_Subscriber_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     */
    public function saveAdditionalData(Varien_Event_Observer $observer)
    {
        $subscriber  = $observer->getSubscriber();
        $countryCode = Mage::app()->getRequest()->getParam('country_code');

        $subscriber->setCountryCode($countryCode);
    }

    /**
     * @param Varien_Event_Observer $observer
     */
    public function addGridColumn(Varien_Event_Observer $observer)
    {
        $block = $observer->getBlock();
        if ($block && $block instanceof Mage_Adminhtml_Block_Newsletter_Subscriber_Grid) {
            /** @var Mage_Adminhtml_Block_Newsletter_Subscriber_Grid $block */
            $block->addColumnAfter('country_code', array(
                'header'    => 'Country',
                'type'      => 'options',
                'index'     => 'country_code',
                'options'   => Mage::helper('snowcore_subscriber')->getCountriesOptionHash()
            ), 'lastname');
        }
    }
}