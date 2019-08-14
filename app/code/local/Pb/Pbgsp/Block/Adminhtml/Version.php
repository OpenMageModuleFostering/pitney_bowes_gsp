<?php
/**
 * Product:       Pb_Pbgsp (1.3.5)
 * Packaged:      2016-04-06T13:00:10+00:00
 * Last Modified: 2016-03-17T11:08:10+00:00


 */



class Pb_Pbgsp_Block_Adminhtml_Version extends  Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return (string) Mage::helper('pbgsp')->getExtensionVersion();
    }
}
?>