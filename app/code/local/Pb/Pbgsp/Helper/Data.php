<?php
/**
 * Product:       Pb_Pbgsp (1.3.6)
 * Packaged:      2016-04-14T14:05:10+00:00
 * Last Modified: 2016-04-06T13:00:10+00:00

 */

class Pb_Pbgsp_Helper_Data extends Mage_Core_Helper_Abstract
{	
	public function getExtensionVersion()
	{
		return (string) Mage::getConfig()->getNode()->modules->Pb_Pbgsp->version;
	}

}
