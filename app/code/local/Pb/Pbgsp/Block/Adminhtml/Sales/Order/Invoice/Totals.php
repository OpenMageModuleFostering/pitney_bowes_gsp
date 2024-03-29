<?php
/**
 * Product:       Pb_Pbgsp (1.3.6)
 * Packaged:      2016-04-14T14:05:10+00:00
 * Last Modified: 2016-04-06T13:00:10+00:00
 * File:          app/code/local/Pb/Pbgsp/Block/Adminhtml/Sales/Order/Invoice/Totals.php
 * Copyright:     Copyright (c) 2016 Pitney Bowes <info@pb.com> / All rights reserved.
 */
class Pb_Pbgsp_Block_Adminhtml_Sales_Order_Invoice_Totals extends Mage_Adminhtml_Block_Sales_Order_Totals {
	
	
	
	public function addTotal(Varien_Object $total, $after=null) {
		
		$shipMethod = $this->getOrder()->getShippingMethod();
		$taxAmount = $this->getOrder()->getTaxAmount();
		$total = Pb_Pbgsp_Block_Sales_Order_Totals::addDuties($total,$after,$shipMethod,$taxAmount);
		return parent::addTotal($total,$after);
		
	}
	
}

?>
