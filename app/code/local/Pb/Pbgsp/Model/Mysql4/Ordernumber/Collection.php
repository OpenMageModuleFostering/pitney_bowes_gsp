<?php
/**
 * Product:       Pb_Pbgsp (1.3.5)
 * Packaged:      2016-04-06T13:00:10+00:00
 * Last Modified: 2016-03-17T11:08:10+00:00
 * File:          app/code/local/Pb/Pbgsp/Model/Mysql4/Ordernumber/Collection.php
 * Copyright:     Copyright (c) 2016 Pitney Bowes <info@pb.com> / All rights reserved.
 */
	class Pb_Pbgsp_Model_Mysql4_Ordernumber_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
		public function _construct()
		{
			$this->_init('pb_pbgsp/ordernumber');
		}
	}
?>