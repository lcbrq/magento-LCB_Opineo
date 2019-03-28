<?php
/**
 * Basic module for "Wiarygodne Opinie" script in checkout success page
 *
 * @category   LCB
 * @package    LCB_Opineo
 * @author     Silpion Tomasz Gregorczyk <tomasz@silpion.com.pl>
 */
class LCB_Opineo_Block_Checkout_Onepage_Success extends Mage_Checkout_Block_Onepage_Success {

    /**
     * Get Opineo uid
     * 
     * @return string
     */
    public function getUid()
    {
        return Mage::helper('lcb_opineo')->getUid();
    }

    /**
     * Get Opineo opi_queue
     * 
     * @return string
     */
    public function getOpiQueue()
    {
        return Mage::helper('lcb_opineo')->getOpiQueue();
    }

    /**
     * @return Mage_Sales_Model_Order
     */
    public function getOrder() {
        return Mage::getModel('sales/order')->load($this->getOrderId());
    }

    /**
     * @return string
     */
    protected function _toHtml() {
        if (!$this->getUid() || !$this->getOrderId()) {
            return '';
        }
        return parent::_toHtml();
    }
}
