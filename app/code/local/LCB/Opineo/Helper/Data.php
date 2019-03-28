<?php
/**
 * Basic module for "Wiarygodne Opinie" script in checkout success page
 *
 * @category   LCB
 * @package    LCB_Opineo
 * @author     Silpion Tomasz Gregorczyk <tomasz@silpion.com.pl>
 */
class LCB_Opineo_Helper_Data extends Mage_Core_Helper_Abstract {

    /**
     * @var string
     */
     const XML_PATH_UID = 'lcb_opineo/settings/uid';

    /**
     * @var string
     */
     const XML_PATH_OPI_QUEUE = 'lcb_opineo/settings/opi_queue';     
    
    /**
     * @return string
     */
    public function getUid() {
        return Mage::getStoreConfig(self::XML_PATH_UID, Mage::app()->getStore()->getId());
    }

    /**
     * @return string
     */
    public function getOpiQueue() {
        return Mage::getStoreConfig(self::XML_PATH_OPI_QUEUE, Mage::app()->getStore()->getId());
    }

}
