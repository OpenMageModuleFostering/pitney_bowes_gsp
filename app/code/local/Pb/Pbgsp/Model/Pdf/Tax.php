<?php
/**
 * Product:       Pb_Pbgsp (1.3.6)
 * Packaged:      2016-04-14T14:05:10+00:00
 * Last Modified: 2016-04-06T13:00:10+00:00
 * File:          app/code/local/Pb/Pbgsp/Model/Pdf/Tax.php
 * Copyright:     Copyright (c) 2016 Pitney Bowes <info@pb.com> / All rights reserved.
 */
	
	class Pb_Pbgsp_Model_Pdf_Tax extends Mage_Tax_Model_Sales_Pdf_Tax {
		public function getTitle() {
			$shipMethod = $this->getOrder()->getShippingMethod();
			$len = strlen("pbgsp_");
			if (strlen($shipMethod) > $len && substr($shipMethod,0,$len) == "pbgsp_") {
				return "Importation Charges";
			}
			return parent::getTitle();
		}		
	}
	
?>
