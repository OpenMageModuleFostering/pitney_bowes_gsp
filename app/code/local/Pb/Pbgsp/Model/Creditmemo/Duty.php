<?php
/**
 * Product:       Pb_Pbgsp (1.3.6)
 * Packaged:      2016-04-14T14:05:10+00:00
 * Last Modified: 2016-04-06T13:00:10+00:00
 * File:          app/code/local/Pb/Pbgsp/Model/Creditmemo/Duty.php
 * Copyright:     Copyright (c) 2016 Pitney Bowes <info@pb.com> / All rights reserved.
 */
 class Pb_Pbgsp_Model_Creditmemo_Duty extends Mage_Sales_Model_Order_Creditmemo_Total_Tax
{
    public function collect(Mage_Sales_Model_Order_Creditmemo $creditmemo)
    {
        Pb_Pbgsp_Model_Util::log('Pb_Pbgsp_Model_Creditmemo_Duty.collect');
        $len = strlen("pbgsp_");
        $order = $creditmemo->getOrder();
        $shipMethod = $order->getShippingMethod();
        if (strlen($shipMethod) > $len && substr($shipMethod, 0, $len) == "pbgsp_") {
            $totalTax = 0;
            $baseTotalTax = 0;
            $totalHiddenTax = 0;
            $baseTotalHiddenTax = 0;
            if ($order->getTaxAmount()) {
                $totalTax = $order->getTaxAmount();
                $baseTotalTax = $totalTax;
            }
            $creditmemo->setTaxAmount($totalTax);
            $creditmemo->setBaseTaxAmount($baseTotalTax);
            $creditmemo->setHiddenTaxAmount($totalHiddenTax);
            $creditmemo->setBaseHiddenTaxAmount($baseTotalHiddenTax);
            $creditmemo->setGrandTotal($creditmemo->getGrandTotal() + $totalTax + $totalHiddenTax);
            $creditmemo->setBaseGrandTotal($creditmemo->getBaseGrandTotal() + $baseTotalTax + $baseTotalHiddenTax);
        } else {
            parent::collect($creditmemo);
        }

        return $this;
    }
}