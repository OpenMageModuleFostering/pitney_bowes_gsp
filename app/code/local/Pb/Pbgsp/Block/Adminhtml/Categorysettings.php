<?php
/**
 * Product:       Pb_Pbgsp (1.3.6)
 * Packaged:      2016-04-14T14:05:10+00:00
 * Last Modified: 2016-04-06T13:00:10+00:00
 */

class Pb_Pbgsp_Block_Adminhtml_Categorysettings extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct()
    {
        $this->_controller = 'adminhtml_categorysettings';
        $this->_blockGroup = 'PB_Pbgsp';
        $this->_headerText = 'Category Export Settings';
        //$class = Mage::getConfig()->getBlockClassName($this->_blockGroup.'/' . $this->_controller . '_grid');
        //var_dump($class);
        parent::__construct();
        $this->_removeButton('add');
    }

}