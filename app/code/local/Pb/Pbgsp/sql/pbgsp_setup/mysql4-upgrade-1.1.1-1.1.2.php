<?php
/**
 * Product:       Pb_Pbgsp (1.3.6)
 * Packaged:      2016-04-14T14:05:10+00:00
 * Last Modified: 2016-04-06T13:00:10+00:00
 * File:          app/code/local/Pb/Pbgsp/sql/pbgsp_setup/mysql4-install-1.0.0.php
 * Copyright:     Copyright (c) 2016 Pitney Bowes <info@pb.com> / All rights reserved.
 */


	$installer = $this;

	$installer->startSetup();

	$installer->run("

				Alter TABLE {$this->getTable('pb_pbgsp/inboundparcel')} add `mage_order_shipment_number` varchar(50) null;

				
				Alter TABLE {$this->getTable('pb_pbgsp/ordernumber')} add `original_shipping_address` varchar(150) null;
				");

	$installer->endSetup();
?>
